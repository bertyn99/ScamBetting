<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\{User, Transaction};
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{


    public function deposit(Request $request)
    {
        Stripe::setApiKey('sk_test_51I47CMHOBAAOK917pegq6r85MJGR6tSZj5hVFWn6dirRlVK870Wk6h0Fhqi1yKp8iz8x5Hs3qJl6pB7zD2czYoxx0098vyAYYD');
        $montant = (int)$request->montant * 100;
        $intent = PaymentIntent::create([
            'amount' => $montant,
            'currency' => 'usd',
            'metadata' => [
                'userId' => Auth::user()->id
            ]
        ]);

        $clientSecret = Arr::get($intent, 'client_secret');

        return view('transaction.index', compact('clientSecret', 'montant'));
    }

    public function index()
    {
    }
    public function store(Request $request)
    {

        $data = $request->json()->all();
        $transaction = new Transaction();
        $transaction->payment_intent_id = $data['paymentIntent']['id'];
        $transaction->amount = $data['paymentIntent']['amount'];
        $transaction->transaction_date = (new DateTime())
            ->setTimestamp($data['paymentIntent']['created'])
            ->format('Y-m-d H:i:s');
        $transaction->user_id = Auth::user()->id;

        if ($data['paymentIntent']['status'] === 'succeeded') {
            $transaction->status = "réussi";
            $user = User::whereId(Auth::user()->id)->get();
            $user->balance = $user->balance + $data['paymentIntent']['amount'];
            $user->save();
        }
        $transaction->save();
        return $data['paymentIntent'];
    }

    public function reussi()
    {
        return view('transaction.thx');
    }
}
