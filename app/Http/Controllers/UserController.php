<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\UserExtraInfo;

use Illuminate\Support\Facades\DB;

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
        return view('user.cards', $data);
    }
    function commands(){
        $data   =   [
            'loggedUserInfo'  =>  User::where('id', '=', session('loggedUserId'))->first()
        ];
        return view('user.commands', $data);
    }
    function qrCode(){

        $qrcodes = DB::table('qrcodes')->get();

        $loggedUserInfo  =  User::where('id', '=', session('loggedUserId'))->first();
        
        foreach($qrcodes as $qr){
            if($qr->id == $loggedUserInfo->qrcode_id){
                $qr_string = $qr->qrcode_string;
            }
        }

        $data   =   [
            'loggedUserInfo'  =>  $loggedUserInfo,
            'qr_string' => $qr_string
        ];
        return view('user.qr-code', $data);
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

        // dd(json_encode($request->addmore));
        // dd($request->input());

        $imageName = time().'.'.$request->image->extension();  

        $request->image->move(public_path('assets/images'), $imageName);

        /* Store $imageName name in DATABASE from HERE */

        $userExtraInfo = new UserExtraInfo;


        $userExtraInfo->img_url = $imageName;
        $userExtraInfo->summary = $request->summary;
        $userExtraInfo->address = $request->address;
        $userExtraInfo->phone = $request->phone;
        $userExtraInfo->gender = $request->gender;
        $userExtraInfo->interet = $request->interet;
        $userExtraInfo->languages = $request->language;
        $userExtraInfo->skills = $request->skills;
        $userExtraInfo->experience = '';
        $userExtraInfo->certifications = '';
        $userExtraInfo->education = $request->addmore;
        

        $userExtraInfo->user_id = session('loggedUserId');

        $status = $userExtraInfo->save();
        
        if($status){

            return back()->with('success','Vous avez mis à jour votre profil avec succès.');

        }else{ 
            return back()->with('fail','Quelque chose ne va pas, veuillez réessayer plus tard.');
        }



    }
}
