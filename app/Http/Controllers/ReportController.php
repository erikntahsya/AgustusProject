<?php

namespace App\Http\Controllers;

use App\Models\TopUp;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $monthlyReports = TopUp::selectRaw('MONTH(created_at) as month, SUM(amount) as total_amount')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        return view('reports.index', compact('monthlyReports'));
    }
}
