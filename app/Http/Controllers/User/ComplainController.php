<?php

namespace App\Http\Controllers\User;

use App\Complain;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ComplainController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $complains = Complain::where('user_id', $user_id)->get();
        return view('user.complain.index', compact('complains'));
    }

    public function show(Complain $complain){
        return view('user.complain.show', compact('complain'));
    }
}
