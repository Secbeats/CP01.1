<?php

namespace App\Http\Controllers;

use App\DonationRequests;
use App\Transaction;
use App\User;
use App\UsersData;
use Illuminate\Http\Request;
use Auth;

class DonatorController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('Donator');
    }

    public function accountCredit(Request $request){
        if($request->isMethod('post')){
            $errors = array();
            $data = $request->all();
            $trans = new Transaction();
            if(!$trans->validate($data)){
                $trans_e = $trans->errors();
                foreach ($trans_e->messages() as $k => $v){
                    foreach ($v as $e){
                        $errors[] = $e;
                    }
                }
            }
            if(empty($errors)){
                $trans->user_id = $request->user_id;
                $trans->user_role = $request->user_role;
                $trans->medium = $request->medium;
                $trans->type = $request->type;
                $trans->amount = $request->amount;
                $trans->mobile_no = $request->mobile_no;
                $trans->reference = $request->reference;
                $trans->status = $request->status;
                if($trans->save()){
                    $trans->transaction_id = 'Trans'.sprintf('%05d', $trans->id);
                    $trans->save();
                    return redirect()
                        ->to('/donator/account-credit')
                        ->with('success','You have successfully Donated '.$request->amount .' BDT');
                }else{
                    return redirect()
                        ->to('/donator/account-credit')
                        ->with('error','You Request Can not be processed At This Time ');
                }
            }else{
                return redirect()
                    ->to('/donator/account-credit')
                    ->with('errors', $errors)
                    ->withInput();
            }
        }
        return view('pages.donator.donate',[
            'donee' => $request->donee
        ]);
    }

    /**
     * Transaction History
     **/
    public function transactionHistory(){
        $trans = Transaction::where('user_role','donator')
            ->get();
        return view('pages.donator.transaction',[
            'trans' => $trans
        ]);
    }

    /**
     * Donee's list
     **/
    public function myDonees(){
        $id = Auth::id();
        $trans = Transaction::where('user_id',$id)
            ->where('type','debit')
            ->get();
        foreach ($trans as $t){
            $dr = DonationRequests::where('donee_id',$t->reference)
                ->where('status','approved')->first();
            $t->dr = $dr;
        }

        return view('pages.donator.donee',[
            'data' => $trans
        ]);
    }

    /**
     * Donation Requests
     **/

    public function donationRequests(){
        $dr = DonationRequests::where('status','approved')->get();
        return view('pages.donator.requests',[
            'data' => $dr
        ]);
    }
    /**
     * View Donee
     **/

    public function viewDonee(Request $request){
        $trans = Transaction::where('user_role','admin')
            ->where('reference',$request->donee)->get();
        foreach ($trans as $t){
            $user = User::find($t->donator);
            $t->d_name = $user->name;
            $donee = User::find($t->reference);
            $t->donee = $donee->name;
        }
        return view('pages.donator.view-donee',[
            'data' => $trans
        ]);
    }

    /**
     * Profile page
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
                    ->to('/donator/my-profile')
                    ->with('success','Your Profile Updated Successfully !');
            }else{
                return redirect()
                    ->to('/donator/my-profile')
                    ->with('errors', $errors)
                    ->withInput();
            }
        }
        return view('pages.donator.profile',[
            'user' => $user,
            'usd' => $usd
        ]);
    }
}
