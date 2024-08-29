<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function session(Request $request){
        $productItem =[];
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        foreach (session('cart')as $id =>$details){

            $name = $details['name'];
            $total = $details['price'];
            $quantity = $details['quantity'];
            $two0 = "00";
            $unit_amount = "$total$two0";
            $unit_amount = intval($total * 100);
            $productItems[] = [
                'price_data' => [
                    'currency' => 'etb',
                    'product_data' => [
                        'name' => $name,
                    ],
                    'unit_amount' => $unit_amount,
                ],
                'quantity' => $quantity,
            ];
        }

        $checkoutSession = \Stripe\Checkout\Session::create([
            'line_items'  =>[$productItems],
            'mode'        => 'payment',
            'allow_promotion_codes' => true,
            'metadata' =>[
                'user_id => "0001'
            ],
            'customer_email' => "genemoregatu@gmail.com",
            'success_url' => route('success'),
            'cancel_url' => route('cancel'),

        ]);
  return redirect()->away($checkoutSession->url);
    }
    public function success(){
        return "Thanks for you order you have completed your payment";
    }
    public function cancel(){
        return "cancel";
}
}