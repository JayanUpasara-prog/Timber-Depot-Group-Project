<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Illuminate\Support\Facades\Redirect;

class PaymentController extends Controller
{
    public function showPaymentForm()
    {
        return view('payment');
    }

    public function processPayment(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
            'payment_method' => 'required|string', 
            'cardholder_name' => 'required|string',
            'email' => 'required|email',
        ]);

        try {
            Stripe::setApiKey(config('services.stripe.secret'));

        

            $chargeParams = [
                'amount' => $request->amount * 100,
                'currency' => 'usd',
                'description' => 'Custom charge for ' . $request->cardholder_name, 
                'source' => $request->stripeToken,
                'statement_descriptor' => 'Custom Descriptor', 
                'receipt_email' => $request->email,
            ];
               

            
            if ($request->payment_method === 'card') {
                $chargeParams['source'] = $request->stripeToken;
            }
           

            Charge::create($chargeParams);

            return Redirect::route('UserDashboard')->with('success', 'Payment successful.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors([$e->getMessage()]);
        }
    }
}
