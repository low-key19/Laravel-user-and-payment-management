<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function index()
    {
        $payments = Payment::with('user')->get();
        return view('payments.index', compact('payments'));
    }

    public function create()
    {
        $users = User::all();
        return view('payments.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'payment_type' => 'required|in:khalti,esewa,bank',
            'user_id' => 'required|exists:users,id',
            'amount' => 'required|numeric',
            'payment_date' => 'required|date',
        ]);

        Payment::create([
            'payment_type' => $request->payment_type,
            'user_id' => $request->user_id,
            'amount' => $request->amount,
            'payment_date' => $request->payment_date,
            'next_renew_date' => date('Y-m-d', strtotime($request->payment_date . ' +30 days')),
        ]);

        return redirect()->route('payments.index')->with('success', 'Payment created successfully.');
    }

    public function edit(Payment $payment)
    {
        $users = User::all();
        return view('payments.edit', compact('payment', 'users'));
    }

    public function update(Request $request, Payment $payment)
    {
        $request->validate([
            'payment_type' => 'required|in:khalti,esewa,bank',
            'user_id' => 'required|exists:users,id',
            'amount' => 'required|numeric',
            'payment_date' => 'required|date',
        ]);

        $payment->update([
            'payment_type' => $request->payment_type,
            'user_id' => $request->user_id,
            'amount' => $request->amount,
            'payment_date' => $request->payment_date,
            'next_renew_date' => date('Y-m-d', strtotime($request->payment_date . ' +30 days')),
        ]);

        return redirect()->route('payments.index')->with('success', 'Payment updated successfully.');
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect()->route('payments.index')->with('success', 'Payment deleted successfully.');
    }
}
