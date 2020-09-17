<?php

namespace App\Http\Controllers;

use App\Notifications\PaymentReceived;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function create()
    {
        return view('payments.create');// resources/views/payments/create.blade.php
    }

    public function store()
    {
        request()->user()->notify(new PaymentReceived());

        return redirect('/payments/create')
            ->with('message', 'Payment Received!');
    }
}
