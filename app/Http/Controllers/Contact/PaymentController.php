<?php

namespace App\Http\Controllers\Contact;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Payment;
use App\Tariff;
use Carbon\Carbon;
use Illuminate\Http\Request;
use SoapClient;

class PaymentController extends Controller
{
    private $MerchantID = 'XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX'; //Required;

    public function tariffs()
    {
        return view('subscribe');
    }

    public function payment(Request $request)
    {
        $request->validate([
            'customer' => 'required'
        ]);
        $customer = Customer::where("id",$request->get("customer"))->firstOrFail();
        $panel = $customer["panel"];

        $count = $customer["ipCount"];

        $panel = Tariff::where('id', $panel)->firstOrFail();
        $price =  $count * $panel['addOnMember'];
        $price +=  $panel['price'];
        $price *= 1000;
        $Description = 'پنل انتخابی شما '.$panel->months." ماهه ";
        $CallbackURL = "http://localhost/Project/public/contact/subscribe/payment/checker";

        $client = new SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

        $result = $client->PaymentRequest([
            'MerchantID' => $this->MerchantID,
            'Amount' => $price,
            'Description' => $Description,
            'Email' => $customer["email"],
            'Mobile' => $customer["phonenumber"],
            'CallbackURL' => $CallbackURL,
        ]);
        if ($result->Status == 100) {
            // star please make a payment on payments table
            Payment::create([
                'customer_id' => 1,
                'resnumber' => $result->Authority,
                'subscription_month' => $panel->months,
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
                    $refId = $result->RefID;
                    $mes = "پرداخت شما موفق بود و حساب کاربری شما فعال شد";
                    return view("Base.result",compact("refId","mes"));
                }
            } else {
                echo 'Transaction failed. Status:'.$result->Status;
            }
        }
        else {
            echo 'Transaction canceled by user';
        }
    }

    private function addSubscription($payment) {

        $payment->update([
            'payment' => 1
        ]);

        $customer = Customer::where('id', $payment->customer_id )->first();

        if ($customer->isSubscribed()) {
            $oldExpireDate = Carbon::parse($customer->expire_subscription);
            $newExpireDate = $oldExpireDate->addMonths($payment->subscription_month);
            $customer->update([
                'expire_subscription' => $newExpireDate,
                'active'=>true
                ]);
        } else {
            $newExpireDate = Carbon::now()->addMonths($payment->subscription_month);
            $customer->update([
                'expire_subscription' => $newExpireDate,
                'active'=>true
            ]);
        }

        return true;
    }
}
