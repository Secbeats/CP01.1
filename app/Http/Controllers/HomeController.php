<?php

namespace App\Http\Controllers;

use App\Notifications\NewUsers;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\UsersData;
use App\VerifyUsers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $page = 'pages.home';
        $id = '';
        $user = '';
        $usd = '';
        if(Auth::user()){
            if(Auth::user()->role == 'donator'){
                $id = Auth::id();
                $page = 'pages.donator.dashboard';
                $user = User::find($id);
                $usd = UsersData::where('user_id',$id)->first();
            }elseif(Auth::user()->role == 'donee'){
                $page = 'pages.donee.dashboard';
            }else{
                $page = 'pages.admin.dashboard';
            }
        }
        return view($page,[
            'user' => $user,
            'usd' => $usd
        ]);
    }

    /**
     * Donator Registration
    **/

    public function registration(Request $request){
        $errors = array();
        if($request->isMethod('post')){
            if($request->password !== $request->repass){
                $errors[] = 'Passwords didn\'t match !!';
            }
            if ($request->email !== $request->reemail){
                $errors[] = 'Email didn\'t match !!';
            }
            if (!isset($request->checkbox)){
                $errors[] = 'Please Agree to the Privacy Agreement & Terms of Conditions. !!';
            }
            $user = new User();
            $usd = new UsersData();
            $data = $request->all();
            if(!$user->validate($data)){
                $user_e = $user->errors();
                foreach ($user_e->messages() as $k => $v){
                    foreach ($v as $e){
                        $errors[] = $e;
                    }
                }
            }
            if(!$usd->validate($data)){
                $usd_e = $usd->errors();
                foreach ($usd_e->messages() as $k => $v){
                    foreach ($v as $e){
                        $errors[] = $e;
                    }
                }
            }
            if(empty($errors)){
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = bcrypt($request->password);
                $user->role = $request->role;
                $user->status = 'not-verified';
                $user->save();
                $last_id = User::orderBy('id', 'desc')->first();
                $usd->user_id = $last_id->id;
                $usd->gender = $request->gender;
                $usd->address = $request->address;
                $usd->contact = $request->contact;
                $usd->country = $request->country;
                $usd->city = $request->city;
                $usd->zip = $request->zip;
                $usd->type = $request->type;
                $usd->save();

                $linkExtension = $this->generateRandomString();
                $link = url('/account/user/verify').'?link='.$linkExtension;

                $transport = (new \Swift_SmtpTransport('ssl://test.helpingray.com', 465))
                    ->setUsername("support@test.helpingray.com")
                    ->setPassword('5^tKJJt{EEbl');

                $mailer = new \Swift_Mailer($transport);

                $message = new \Swift_Message('Helping Ray - Account verify Link');
                $message->setFrom(['support@test.helpingray.com' => 'Account verify link - Helping Ray']);
                $message->setTo([$request->email => $request->name]);
                $message->setBody('<html><body>'.
                    '<h1>Hi '.$request->name .',</h1>'.
                    '<p style="font-size:18px;">Your account registration is complete. Please click the button/link below to verify your account. The link will expire after 24-hours.</p>'.
                    '<table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                      <td>
                          <div>
                          <!--[if mso]>
                              <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://litmus.com" style="height:36px;v-text-anchor:middle;width:150px;" arcsize="5%" strokecolor="#EB7035" fillcolor="#EB7035">
                              <w:anchorlock/>
                              <center style="color:#ffffff;font-family:Helvetica, Arial,sans-serif;font-size:16px;">I am a button &rarr;</center>
                              </v:roundrect>
                              <![endif]-->
                          <a href="'.$link.'" style="background-color:#EB7035;border:1px solid #EB7035;border-radius:3px;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:16px;line-height:44px;text-align:center;text-decoration:none;width:150px;-webkit-text-size-adjust:none;mso-hide:all;">Verify Account &rarr;</a>
                          </div>
                      </td>
                  </tr>
             </table>'.
                    '<br><br>Thank You<br>Helping Ray<br>Customer Care Team</body></html>',
                    'text/html');

                $result = $mailer->send($message);

                $genLink = new VerifyUsers();

                $genLink->email = $request->email;
                $genLink->link = $linkExtension;

                $genLink->save();
                $user->find(8)->notify(new NewUsers());

                return redirect()
                    ->to('/sign-up/confirm')
                    ->with('success', 'Your Account Has Been created successfully!!');
            }else{
                return redirect()
                    ->to('/sign-up')
                    ->with('errors', $errors)
                    ->withInput();
            }
        }
        return view('pages.sign-up');
    }
    /**
     * Confirm Registration
     **/
    public function confirm(){
        return view('pages.confirm');
    }

    /**
     * Random string generator
     **/

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }


    /**
     * verify user
    **/

    public function verifyUser(Request $request){
        $linkCheck = VerifyUsers::where('link', $request->link)->first();
        if(!empty($linkCheck)){
            $date = date('Y-m-d');
            $date1 = strtotime($linkCheck->created_at);
            $date2 = strtotime($date);
            $timediff = $date2 - $date1;
            if($timediff > 86400){
                return redirect()
                    ->to('/login')
                    ->with('error','This Verification link has been expired !!');
            }else{
                $check = User::where('email',$linkCheck->email)->first();
                $check->status = 'verified';
                $check->save();
                $linkCheck->delete();
                return redirect()
                    ->to('/login')
                    ->with('success','Your Account Verified Successfully !!');
            }
        }else{
            return redirect()
                ->to('/login')
                ->with('error','This Verification link has been expired !!');
        }

    }

    public function howItWorks(){
        return view('pages.how-it-works');
    }

    public function terms(){
        return view('pages.terms');
    }
}
