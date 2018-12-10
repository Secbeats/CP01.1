<?php

namespace App\Http\Controllers;

use App\DonationRequests;
use App\DoneeFiles;
use App\Transaction;
use App\User;
use App\UsersData;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('Admin');
    }

    public function donators(){
        $dt = User::where('role','donator')
            ->get();
        foreach ($dt as $d){
            $usd = UsersData::where('user_id',$d->id)
                ->first();
            $d->usd = $usd;
        }
        return view('pages.admin.donators',[
            'data' => $dt
        ]);
    }

    public function donees(){
        $dn = User::where('role','donee')
            ->get();
        foreach ($dn as $d){
            $usd = UsersData::where('user_id',$d->id)
                ->first();
            $d->usd = $usd;
        }
        return view('pages.admin.donees',[
            'data' => $dn
        ]);
    }

    public function totalDonation(){
        $trans  = Transaction::where('user_role','donator')
            ->get();
        foreach ($trans as $t){
            $user = User::find($t->user_id);
            $t->user = $user;
            $usd = UsersData::where('user_id',$t->user_id)
                ->first();
            $t->usd = $usd;
        }
        return view('pages.admin.total-donation',[
            'data' => $trans
        ]);
    }

    public function approveDonation(Request $request){
        $dr = DonationRequests::where('status','requested')->get();
        foreach ($dr as $d){
            $files = DoneeFiles::where('user_id',$d->donee_id)->get();
            $d->files = $files;
        }
        if($request->isMethod('post')){
            $dr = DonationRequests::find($request->dr_id);
            $dr->status = $request->status;
            if ($dr->save()){
                return redirect()
                    ->to('/admin/approve-donation')
                    ->with('success','Donation Request has been approved for '. $dr->name);
            }else{
                return redirect()
                    ->to('/admin/approve-donation')
                    ->with('error','Donation Request can not be approved for '. $dr->name);
            }
        }
        return view('pages.admin.approve-donation',[
            'data' => $dr
        ]);
    }

    public function viewDetails(Request $request){
        $dr = DonationRequests::find($request->id);
        $files = DoneeFiles::where('user_id',$dr->donee_id)->get();

        return view('pages.admin.view-details',[
            'data' => $files
        ]);
    }

    public function withdrawal(){
        return view('pages.admin.withdrawal');
    }
}
