<?php

namespace App\Http\Controllers;

use App\DonationRequests;
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
        $errors = array();
        $data = $request->all();
        if($request->isMethod('post')){
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
                $dr->amount = $request->amount;
                $dr->contact = $request->contact;
                $dr->status = $request->status;
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
        $usd = UsersData::where('id',$id)->first();
        $errors = array();
        $data = $request->all();
        if($request->isMethod('post')){
            $usr = User::find($request->user_id);
            $ud = UsersData::where('user_id',$request->user_id)->first();
            if(!empty($data)){
                $usr->name = $request->name;
                $usr->save();
                $ud->country = $request->country;
                $ud->zip = $request->zip;
                $ud->gender = $request->gender;
                $ud->address = $request->address;
                $ud->contact = $request->contact;
                $ud->organization = $request->organization;
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
