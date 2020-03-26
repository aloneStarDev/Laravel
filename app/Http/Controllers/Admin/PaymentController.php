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
        $payments = Payment::with('customer')->where('payment', 1)->latest()->paginate(20);
        return view('Admin.payments.all', compact('payments'));
    }

    public function unsuccessful()
    {
        $payments = Payment::with('customer')->where('payment', 0)->latest()->paginate(20);
        return view('Admin.payments.unsuccessful', compact('payments'));
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();
        return back();
    }
}
