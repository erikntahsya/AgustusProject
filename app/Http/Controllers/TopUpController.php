<?php
namespace App\Http\Controllers;

use App\Models\TopUp;
use Illuminate\Http\Request;

class TopUpController extends Controller
{
    
    public function index(Request $request)
    {
        $query = TopUp::query();

        if ($search = $request->query('search')) {
            $query->where('user_name', 'like', "%{$search}%")
                  ->orWhere('game_name', 'like', "%{$search}%");
        }

        $topUps = $query->get();

        return view('topups.index', compact('topUps'));
    }

    
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
            'status' => 'required'
        ]);

                TopUp::create($request->all());

        return redirect()->route('topups.index')->with('success', 'Top-Up created successfully.');
    }

    
    
    public function show(TopUp $topup)
    {
        return view('topups.show', compact('topup'));
    }

    
    public function edit(TopUp $topup)
    {
        return view('topups.edit', compact('topup'));
    }

    
    public function update(Request $request, TopUp $topup)
    {
        
        
        $request->validate([
            'user_name' => 'required',
            'game_name' => 'required',
            'amount' => 'required|integer',
            'status' => 'required'
        ]);

        $topup->update($request->all());

        return redirect()->route('topups.index')->with('success', 'Top-Up updated successfully.');
    }

    
    public function destroy(TopUp $topup)
    {
        $topup->delete();

        return redirect()->route('topups.index')->with('success', 'Top-Up deleted successfully.');
    }
}
