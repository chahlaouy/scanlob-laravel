<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;
use App\Models\Offers;

class OffersController extends Controller
{
    function offers(){
        $data   =   [
            'loggedUserInfo'  =>  Admin::where('id', '=', session('loggedUserId'))->first()
        ];
        return view('admin.offers', $data);
    }
    function add(){
        $data   =   [
            'loggedUserInfo'  =>  Admin::where('id', '=', session('loggedUserId'))->first()
        ];
        return view('admin.add-offer', $data);
    }
    function create(Request $request){

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'tag' => 'required',
            'price' => 'required',
            'category' => 'required',
        ]);

        $imageName = time().'.'.$request->image->extension();  

        $request->image->move(public_path('assets/images'), $imageName);

        /* Store $imageName name in DATABASE from HERE */
        
        $offer = new Offers;

        $offer->img_url = $imageName;
        $offer->title = $request->title;
        $offer->tag = $request->tag;
        $offer->price = $request->price;
        $offer->category = $request->category;
        $offer->description = $request->description;
        $status = $offer->save();

        if($status){

            return back()->with('success', 'Offre Ajoutée avec succée.');
        
        }else{
            
            return back()->with('fail', 'Quelque chose ne va pas, veuillez réessayer plus tard.');
        }
    }
}
