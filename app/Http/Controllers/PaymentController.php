<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Payment;
use App\Tariff;
use Carbon\Carbon;
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

        //price based on Toman
        $price = Tariff::where('months', $month)->value('price');
//        dd($price);

        $Description = 'توضیحات تراکنش تستی'; // Required
//        $Email = auth()->user()->email; // Optional
//        $Mobile = '09123456789'; // Optional
        $CallbackURL = 'http://localhost:8000/payment/checker'; // Required

        //https://laracasts.com/discuss/channels/laravel/artisan-command-class-soapclient-not-found
        $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);
        $result = $client->PaymentRequest([
                'MerchantID' => $this->MerchantID,
                'Amount' => $price,
                'Description' => $Description,
//                'Email' => $Email, --->optional
//                'Mobile' => $Mobile, --->optional
                'CallbackURL' => $CallbackURL,
            ]);

        if ($result->Status == 100) {
            auth()->user()->payments()->create([
                'resnumber' => $result->Authority,
                'subscription_month' => $month,
                'price' => $price
            ]);
            return redirect('https://www.zarinpal.com/pg/StartPay/'.$result->Authority);
        } else {
            echo'ERR: '.$result->Status;
        }
    }

    public function checker()
    {
        $Authority = request('Authority');
        $payment = Payment::where('resnumber', $Authority)->firstOrFail();

        if (request('Status') == 'OK') {
            $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

            $result = $client->PaymentVerification([
                'MerchantID' => $this->MerchantID,
                'Authority' => $Authority,
                'Amount' => $payment->price,
            ]);

            if ($result->Status == 100) {

                if ($this->addSubscription($payment)) {
                    //sweet alert
                    alert()->success('Paid successfully', 'have a good course');
                    //specify redirect route
                    return redirect('wherer ?');
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
//            $newExpireDate = Carbon::now()->add(CarbonInterval::months($payment->subscription_month));
            $newExpireDate = Carbon::now()->addMonths($payment->subscription_month);
            $customer->update([
                'expire_subscription' => $newExpireDate,
            ]);
        }
    }
}
