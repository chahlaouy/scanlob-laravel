<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin; 
use App\Models\User; 

class AdminController extends Controller
{
    function index(){ 


        $monthKeyValue = [
            'janvier' => '01',
            'fevrier' => '02',
            'fevrier' => '3',
            'fevrier' => '04',
            'fevrier' => '05',
            'fevrier' => '06'
        ];

        $month = ['janvier','janvier','janvier','janvier','janvier','janvier'];

        $user = [];
        foreach ($month as $key => $value) {
            $user[] = User::where(\DB::raw("DATE_FORMAT(created_at, '%M')"),$value)->count();
        }


        $loggedUserInfo  =  Admin::where('id', '=', session('loggedUserId'))->first();

        return view('admin.dashbord')->with('month',json_encode($month,JSON_NUMERIC_CHECK))->with('user',json_encode($user,JSON_NUMERIC_CHECK))->with('loggedUserInfo', $loggedUserInfo);
    }

    function profile(){
        $data   =   [
            'loggedUserInfo'  =>  Admin::where('id', '=', session('loggedUserId'))->first()
        ];
        return view('admin.profile', $data);
    }

    function offers(){
        $data   =   [
            'loggedUserInfo'  =>  Admin::where('id', '=', session('loggedUserId'))->first()
        ];
        return view('admin.offers', $data);
    }
}
