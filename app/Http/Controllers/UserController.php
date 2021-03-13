<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\UserExtraInfo;

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

    function addUserInfo(Request $request){

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'addmore.*.year' => 'required',
            'addmore.*.level' => 'required',
            'skills.*' => 'required',
            'interet.*' => 'required',
            'language.*' => 'required',
            'summary' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'address' => 'required'
        ]);

    

        $imageName = time().'.'.$request->image->extension();  

        $request->image->move(public_path('images'), $imageName);

        /* Store $imageName name in DATABASE from HERE */

    

        return back()

            ->with('success','You have successfully upload image.')

            ->with('image',$imageName); 

    }
}
