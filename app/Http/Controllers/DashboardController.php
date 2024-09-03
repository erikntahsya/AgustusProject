<?php
namespace App\Http\Controllers;

use App\Models\TopUp;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalTopUps = TopUp::count();
        $recentTopUps = TopUp::latest()->take(5)->get();

        return view('dashboard.index', compact('totalTopUps', 'recentTopUps'));
    }
}
