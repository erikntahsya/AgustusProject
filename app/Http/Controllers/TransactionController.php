<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function create(Request $request)
    {
        $game = $request->input('game');
        $price = $request->input('price');

        return view('transaction.create', compact('game', 'price'));
    }

    public function store(Request $request)
    {
    

        return redirect()->route('home')->with('success', 'Transaction completed successfully!');   
    }
}
