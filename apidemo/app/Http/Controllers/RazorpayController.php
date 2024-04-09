<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Razorpay\Api\Api;
use App\Http\Requests;
use Session;
use Redirect;

class RazorpayController extends Controller
{
    public function razorpay()
    {        
        return view('index2');
    }

    public function payment(Request $request)
    {       // dd($request->all());
        $input = $request->all(); 
        //dd($input);    
        $api = new Api(env('KEY_ID'), env('KEY_SECRET'));
        //dd($api);
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
       // dd( $payment);

        if(count($input)  && !empty($input['razorpay_payment_id'])) 
        {
            try 
            {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 

            } 
            catch (\Exception $e) 
            {
                return  $e->getMessage();
                \Session()->put('error',$e->getMessage());
                return redirect()->back();
            }            
        }
        
        \Session()->put('success', 'Payment successful, your order will be despatched in the next 48 hours.');
        return redirect()->back();
    }
}