<?php

namespace App\Http\Controllers;

use App\DonationRequests;
use App\DoneeFiles;
use App\User;
use Auth;
use App\UsersData;
use Illuminate\Http\Request;
use App\Transaction;

class DoneeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('Donee');
    }
    /**
     * Donation Request
    **/
    public function requestDonation(Request $request){
        $id = Auth::id();
        $errors = array();
        $data = $request->all();

        if($request->isMethod('post')){
            //dd($request->file('file'));
            $dr = new DonationRequests();
            if(!$dr->validate($data)){
                $dr_e = $dr->errors();
                foreach ($dr_e->messages() as $k => $v){
                    foreach ($v as $e){
                        $errors[] = $e;
                    }
                }
            }
            if(empty($errors)){
                $dr->donee_id = $request->donee_id;
                $dr->purpose = $request->purpose;
                $dr->address = $request->address;
                $dr->hospital = $request->hospital;
                $dr->amount = $request->amount;
                $dr->contact = $request->contact;
                $dr->status = $request->status;
                if($request->hasFile('file')) {
                    $files = $request->file('file');
                    for($i = 0; $i < count($files); $i++){
                        $name = $files[$i]->getClientOriginalName();
                        $destinationPath = public_path('/uploads/donees/'.$id);
                        $files[$i]->move($destinationPath, $name);

                        $df = new DoneeFiles();
                        $df->file_name = $name;
                        $df->user_id = $id;
                        $df->save();
                    }
                }
                if($dr->save()){
                    return redirect()
                        ->to('/donee/request-donation')
                        ->with('success','You have successfully Requested for '.$request->amount . ' Donation');
                }else{
                    return redirect()
                        ->to('/donee/request-donation')
                        ->with('error','You Request Can not be processed At This Time ');
                }
            }else{
                return redirect()
                    ->to('/donee/request-donation')
                    ->with('errors', $errors)
                    ->withInput();
            }
        }
        return view('pages.donee.make-donation-request');
    }
    /**
     * Transaction History
     **/
    public function transactionHistory(){
        $trans = Transaction::where('user_role','donee')
            ->get();
        return view('pages.donee.transaction',[
            'trans' => $trans
        ]);
    }

    /**
     * donators list
    **/

    public function donators(){
        $dl = User::where('role','donator')
            ->get();
        foreach ($dl as $d){
            $usd = UsersData::where('user_id',$d->id)
                ->first();
            $d->usd = $usd;
        }
        return view('pages.donee.donators-list',[
            'data' => $dl
        ]);
    }
    /**
     * Profile Page
    **/
    public function myProfile(Request $request){
        $id = Auth::id();
        $user = User::find($id);
        $usd = UsersData::where('user_id',$id)->first();
        $errors = array();
        $data = $request->all();
        if($request->isMethod('post')){
            $usr = User::find($request->user_id);
            $ud = UsersData::where('user_id',$request->user_id)->first();
            if(!empty($data)){
                $usr->name = $request->name;
                $usr->save();
                $ud->country = $request->country;
                $ud->city = $request->city;
                $ud->zip = $request->zip;
                $ud->gender = $request->gender;
                $ud->address = $request->address;
                $ud->contact = $request->contact;
                $ud->save();
                return redirect()
                    ->to('/donee/my-profile')
                    ->with('success','Your Profile Updated Successfully !');
            }else{
                return redirect()
                    ->to('/donee/my-profile')
                    ->with('errors', $errors)
                    ->withInput();
            }
        }
        return view('pages.donee.profile',[
            'user' => $user,
            'usd' => $usd
        ]);
    }

    /**
     * Request list
    **/

    public function donationRequests(){
        $id = Auth::id();
        $dr = DonationRequests::where('donee_id',$id)
            ->get();
        return view('pages.donee.requests',[
            'data' => $dr
        ]);
    }

}
