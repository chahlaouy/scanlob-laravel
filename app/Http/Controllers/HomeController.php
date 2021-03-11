<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class HomeController extends Controller
{
    function home(){
        if(session()->has('loggedUserId')){
            $user   =   User::where('id', '=', session('loggedUserId'))->first();
            $data   =   [
                'loggedUserInfo'  =>  $user
            ];
            return view('home', $data);
        }
        return view('home');
    }
    function products(){
        if(session()->has('loggedUserId')){
            $user   =   User::where('id', '=', session('loggedUserId'))->first();
            $data   =   [
                'loggedUserInfo'  =>  $user
            ];
            return view('product-list', $data);
        }
        return view('product-list');
    }
}
