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
        return view('pages.admin.approve-donation',[
            'data' => $dr
        ]);
    }

    public function withdrawal(){
        return view('pages.admin.withdrawal');
    }
}
