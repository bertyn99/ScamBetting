<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserBet;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function balance()
    {
        $bets = UserBet::where('id', auth()->user()->id)->get();

        /*  Auth::user()->balance */
    }

    public function deposit()
    {
        return view('user.depot');
    }
    public function withdraw(Request $request)
    {

        if ($request->amount > 0 && $request->amount <= auth()->user()->balance) {
            auth()->user()->balance -= $request->amount;
        }
        return redirect()->route('profile.index')->with("Vous n\' avez rien a retirer");
    }
}
