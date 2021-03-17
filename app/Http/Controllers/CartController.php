<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Offers;

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
        $items = \Cart::getContent();

        return view('',  ['items', items]);
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
