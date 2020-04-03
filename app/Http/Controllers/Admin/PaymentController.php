<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Payment;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::where('visited',false)->with('customer')->latest()->paginate(20);
        return view('Admin.payments.all', compact('payments'));
    }

    public function destroy(Payment $payment)
    {
        $payment->update([
            "visited"=>true
        ]);
        return back();
    }
}
