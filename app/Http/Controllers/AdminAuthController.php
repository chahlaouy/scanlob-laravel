<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    function login(){

        return view('auth.login');
    }

    function register(){

        return view('auth.register');
    }
    function createUser(Request $request){
        
        //Validating request
        $request->validate([
            'username'  =>  'required',
            'email'  =>  'required | email | unique:users',
            'password'  =>  'required | min:8',
            'confirm-password'  =>  'required | min:4 | max:12',
        ]);

        // if form validated successfully

        //Creating a blank user
        $user = new User;
        
        // Fill the Use Data
        $user->username     =       $request->username;
        $user->email        =       $request->email;
        $user->password     =       Hash::make($request->password);

        // Save The User
        $query = $user->save();

        // Using query builder
        // $query = DB::table('users')
        //             ->insert([
        //                 'username'  =>  $request->username,
        //                 'email'  =>  $request->email,
        //                 'password'  =>  Hash::make($request-password),
        //             ]);
        // Check the nothing goes wrong
        if ($query){

            return back()->with('success', 'you have been successfully registred');
        } else {
            return back()->with('fail', 'Sorry something went wrong');
        }
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
                return redirect('dashboard');

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
            return redirect('connexion');
        }
    }
}
