<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class AdminController extends Controller
{
    function index(){ 

        $data   =   [
            'loggedUserInfo'  =>  User::where('id', '=', session('loggedUserId'))->first()
        ];

        return view('admin.dashbord', $data);
    }

    function profile(){
        $data   =   [
            'loggedUserInfo'  =>  User::where('id', '=', session('loggedUserId'))->first()
        ];
        return view('user.dashbord');
    }

    function cards(){
        $data   =   [
            'loggedUserInfo'  =>  User::where('id', '=', session('loggedUserId'))->first()
        ];
        return view('user.dashbord');
    }
}
