<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

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
            'payment_method' => 'required|string', // Add this line for the payment method
            'cardholder_name' => 'required|string',
            'email' => 'required|email',
        ]);

        try {
            Stripe::setApiKey(config('services.stripe.secret'));

        

            $chargeParams = [
                'amount' => $request->amount * 100,
                'currency' => 'usd',
                'description' => 'Custom charge for ' . $request->cardholder_name, // Include the customer's name in the description
                'source' => $request->stripeToken,
                'statement_descriptor' => 'Custom Descriptor', // Update with your descriptor
                'receipt_email' => $request->email,
            ];
               

            // Handle different payment methods
            if ($request->payment_method === 'card') {
                $chargeParams['source'] = $request->stripeToken; // Update with the appropriate field for the card token
            }
            // Add additional cases for other payment methods if needed

            Charge::create($chargeParams);

            return redirect()->back()->with('success', 'Payment successful.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors([$e->getMessage()]);
        }
    }
}
