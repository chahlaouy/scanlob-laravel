<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
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
