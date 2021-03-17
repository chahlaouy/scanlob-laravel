<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Offers;
use App\Models\User;

class CartController extends Controller
{
    public function addToCart(Request $request){

        $request->validate([
            'quantity'  => 'required'
        ]);

        $userID = session('loggedUserId');
        $rowId = rand(0,1000);
        $offer = Offers::find($request->id);
        if ($offer) {
            // add the product to cart
            \Cart::session($userID)->add(array(
                'id' => $rowId,
                'name' => $offer->title,
                'price' => $offer->price,
                'quantity' => $request->quantity,
                'attributes' => array(),
                'associatedModel' => $offer
            ));
            return back()->with('success', "Offre Ajouter avec success");

        } else {
            return back()->with('fail', "Quelque chose ne va pas, veuillez réessayer plus tard.");
        }
        
    }
    
    public function getCart(){

        $userID = session('loggedUserId');
        $items = \Cart::session($userID)->getContent();

        $total = 0;

        // dd($items);
        foreach($items as $item) {
            $total = $total + (intval($item->quantity) * $item->price);
        }

        $data   =   [
            'loggedUserInfo'  =>  User::where('id', '=', $userID)->first(),
            'items' => $items,
            'total' => $total
        ];
        return view('cart-items',  $data);
    }
    public function deleteCart($id){

        $userID = session('loggedUserId');
        \Cart::session($userID)->remove($id);
        $items = \Cart::session($userID)->getContent();
        $data   =   [
            'loggedUserInfo'  =>  User::where('id', '=', $userID)->first(),
            'items' => $items
        ];
        return back()->with('success', 'Offre enléver avec succees');
    }
    public function checkout()
    {   
        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey('sk_test_51HlQt5AOYmkBFRPiESZkoJGmmDsVN2lekG3Zo8lSaEjBr80nC5TLBidqgNyl9wxunXivJ8OHRSj2Ro3vEvmVTtqb00gXaVlvAG');
        		
		$amount = 100;
		$amount *= 100;
        $amount = (int) $amount;
        
        $payment_intent = \Stripe\PaymentIntent::create([
			'description' => 'Stripe Test Payment',
			'amount' => $amount,
			'currency' => 'eur',
			'description' => 'Payment From Muhammed',
			'payment_method_types' => ['card'],
		]);
		$intent = $payment_intent->client_secret;

		return view('chechout',compact('intent'));

    }

    public function afterPayment()
    {
        return view('payment');
    }
}
