<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    function index(){

        $data   =   [
            'loggedUserInfo'  =>  User::where('id', '=', session('loggedUserId'))->first()
        ];

        return view('user.dashbord', $data);
    }

    function profile(){
        $data   =   [
            'loggedUserInfo'  =>  User::where('id', '=', session('loggedUserId'))->first()
        ];
        return view('user.profile', $data);
    }

    function cards(){
        $data   =   [
            'loggedUserInfo'  =>  User::where('id', '=', session('loggedUserId'))->first()
        ];
        return view('user.cards');
    }
    function commands(){
        $data   =   [
            'loggedUserInfo'  =>  User::where('id', '=', session('loggedUserId'))->first()
        ];
        return view('user.commands');
    }
    function qrCode(){
        $data   =   [
            'loggedUserInfo'  =>  User::where('id', '=', session('loggedUserId'))->first()
        ];
        return view('user.qr-code');
    }
}
