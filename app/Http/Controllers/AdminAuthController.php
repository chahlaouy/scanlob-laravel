<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\User;

class AdminAuthController extends Controller
{
    
    function login(){
        return view('auth.admin-login');
    }


    function check(Request $request){

        // Validating request
        $request->validate([
            'email'     =>      'required | email',
            'password'  =>      'required | min:4 | max:12'
        ]);

        // if form is validated successfully

        // get user from db

        $user   =   User::where('email', '=', $request->email)->first();
        
        if($user){

            //if password user matches password request
            if (Hash::check($request->password, $user->password)){

                // redirect to user dashboard

                $request->session()->put('loggedUserId', $user->id);
                return redirect('admin/dashboard');

            }else{
                return back()->with('fail', 'Invalid Password');
            }

        }else{
            return back()->with('fail', 'no account found for this email');
        }
    }

    function logout(){

        if(session()->has('loggedUserId')){
            session()->pull('loggedUserId');
            return redirect('admin/connexion');
        }
    }
}
