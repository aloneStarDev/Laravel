<?php

namespace App\Http\Controllers\Contact;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Payment;
use App\Tariff;
use Carbon\Carbon;
use http\Env\Request;
use SoapClient;

class PaymentController extends Controller
{
    private $MerchantID = 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX'; //Required;

    public function tariffs()
    {
        return view('subscribe');
    }

    public function payment()
    {
        $this->validate(request(), [
            'month' => 'required'
        ]);

        $month = (int) request('month');

        $count = 1;

        $price = Tariff::where('months', $month)->value('price');
        $price += $count * Tariff::where('months', $month)->value('addOnMember');
        $price *= 1000;
        $Description = 'پنل انتخابی شما '.request("month")." ماهه ";
        $CallbackURL = "http://localhost/Project/public/contact/subscribe/payment/checker";

        $client = new SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

        $result = $client->PaymentRequest([
            'MerchantID' => $this->MerchantID,
            'Amount' => $price,
            'Description' => $Description,
//                'Email' => $Email, --->optional
                'Mobile' => "09304437493",
            'CallbackURL' => $CallbackURL,
        ]);
        if ($result->Status == 100) {
            // star please make a payment on payments table
            Payment::create([
                'customer_id' => 1,
                'resnumber' => $result->Authority,
                'subscription_month' => $month,
                'price' => $price
            ]);

            // main
            // return redirect('https://www.zarinpal.com/pg/StartPay/'.$result->Authority);

            // for test
            return redirect('https://sandbox.zarinpal.com/pg/StartPay/'.$result->Authority);
        } else {
            echo 'ERR: '.$result->Status;
        }
    }

    public function checker()
    {
        $Authority = request('Authority');
        $payment = Payment::where('resnumber', $Authority)->firstOrFail();
        if (request('Status') == 'OK') {
            // main
            // $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

            // for test
            $client = new SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

            $result = $client->PaymentVerification([
                'MerchantID' => $this->MerchantID,
                'Authority' => $Authority,
                'Amount' => $payment->price,
            ]);

            if ($result->Status == 100) {

                if ($this->addSubscription($payment)) {
                    // sweet alert
                    // alert()->success('Paid successfully', 'have a good course');

                    //specify redirect route
                    return redirect(route('base'));
                }
                echo 'Transaction success. RefID:'.$result->RefID;
            } else {
                echo 'Transaction failed. Status:'.$result->Status;
            }
        }
        else {
            echo 'Transaction canceled by user';
        }
    }

    private function addSubscription($payment) {
        //for confirm payment
        $payment->update([
            'payment' => 1
        ]);

        $customer = Customer::where('id', $payment->customer_id )->first();

        if ($customer->isSubscribed()) {
            $oldExpireDate = Carbon::parse($customer->expire_subscription);
            $newExpireDate = $oldExpireDate->addMonths($payment->subscription_month);
            $customer->update([
                'expire_subscription' => $newExpireDate,
            ]);
        } else {
            $newExpireDate = Carbon::now()->addMonths($payment->subscription_month);
            $customer->update([
                'expire_subscription' => $newExpireDate,
            ]);
        }

        return true;
    }
}
