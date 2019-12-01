<?php

namespace App\Http\Controllers\User;

use App\Complain;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $total_complain = Complain::all()->count();
        $total_solved = Complain::where('is_complete', true)->get()->count();
        return view('user.dashboard', compact('total_solved', 'total_complain'));
    }
}
