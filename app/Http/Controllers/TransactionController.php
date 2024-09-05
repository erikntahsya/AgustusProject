<?php

namespace App\Http\Controllers;

use App\Models\TopUp;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function create()
    {
        return view('topups.create');
    }

    
    public function store(Request $request)
    {
        
        $request->validate([
            'user_name' => 'required',
            'game_name' => 'required',
            'amount' => 'required|integer',
            'metode' => 'required'
        ]);

                TopUp::create($request->all());

      
                return redirect('/home')->with('success', 'Transaction completed successfully!');   
    }
}
