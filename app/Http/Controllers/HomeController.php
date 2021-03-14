<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Offers;
use App\Models\Qrcode;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function home(){
        
        
        if(session()->has('loggedUserId')){
            $user   =   User::where('id', '=', session('loggedUserId'))->first();
            $data   =   [
                'loggedUserInfo'  =>  $user,
                
            ];
            return view('home', $data);
        }
        return view('home');
    }

    function products(){
        $offers = DB::table('offers')->get();
        if(session()->has('loggedUserId')){
            $user   =   User::where('id', '=', session('loggedUserId'))->first();
            $data   =   [
                'loggedUserInfo'  =>  $user,
                'offers'    => $offers
            ];
            return view('product-list', $data);
        }
        $data   =   [
            'offers'    => $offers
        ];
        return view('product-list', $data);
    }

    function search(Request $request){
        $request->validate([
            'qrcode' => 'required|max:5|min:5'
        ]);
        $qrCode = Qrcode::where('qrcode_string', '=', $request->qrcode)->first();
        if($qrCode){
            $user = User::where('qrcode_id', '=', $qrCode->id)->first();
            if(session()->has('loggedUserId')){
                $loggeduser   =   User::where('id', '=', session('loggedUserId'))->first();
                $data   =   [
                    'loggedUserInfo'  =>  $loggeduser,
                    'user'    => $user
                ];
                return view('search', $data);
            }
            $data   =   [
                'user'    => $user
            ];
            return view('search', $data);
        }
        return view('search');
    }

    function getProfile(Request $request, $id){
        $user = User::where("id", "=", $id)->first();

        if($user){
            $data = [
                'user' => $user
            ];
            return view('profile', $data);
        }
        return 'erreur'
    }
}
