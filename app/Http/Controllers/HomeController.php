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
        
        $offers = DB::table('offers')->get();

        if(session()->has('loggedUserId')){
            $user   =   User::where('id', '=', session('loggedUserId'))->first();
            $data   =   [
                'loggedUserInfo'  =>  $user,
                'offers' => $offers
                
            ];
            return view('home', $data);
        }
        return view('home', ['offers' => $offers]);
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

    function getOffer($id){
        /** get user */
        $offer = Offers::where("id", "=", $id)->first();


        /** user not empty */
        if($offer){

            /** logged user */
            if(session()->has('loggedUserId')){
                $loggeduser   =   User::where('id', '=', session('loggedUserId'))->first();
                $data = [
                    'offer' => $offer,
                    'loggedUserInfo'  =>  $loggeduser,
                ];
                return view('single-post', $data);

            }
            /** no logged user */
            else{
                $data = [
                    'offer' => $offer,
                ];
                return view('single-post', $data);
            }

        }
        /** user empty */
        else{
            return view('single-post');
        }
    }
    function search(Request $request){
        $request->validate([
            'qrcode' => 'required|max:5|min:5'
        ]);
        $qrCode = Qrcode::where('qrcode_string', '=', $request->qrcode)->first();
        if($qrCode){
            $user = User::where('qrcode_id', '=', $qrCode->id)->first();
            $data   =   [
                'user'    => $user
            ];
            if(session()->has('loggedUserId')){
                $loggeduser   =   User::where('id', '=', session('loggedUserId'))->first();
                $data   =   [
                    'loggedUserInfo'  =>  $loggeduser,
                    'user'    => $user
                ];
                return view('search', $data);
            }
            
            return view('search', $data);
        }
        return view('search');
    }

    function getProfile(Request $request, $id){

        /** get user */
        $user = User::where("id", "=", $id)->first();


        /** user not empty */
        if($user){

            /** logged user */
            if(session()->has('loggedUserId')){
                $loggeduser   =   User::where('id', '=', session('loggedUserId'))->first();
                $data = [
                    'user' => $user,
                    'loggedUserInfo'  =>  $loggeduser,
                ];
                return view('profile', $data);

            }
            /** no logged user */
            else{
                $data = [
                    'user' => $user,
                ];
                return view('profile', $data);
            }

        }
        /** user empty */
        else{
            return view('profile');
        }

    }

}
