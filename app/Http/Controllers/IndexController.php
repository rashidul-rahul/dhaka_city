<?php

namespace App\Http\Controllers;

use App\Information;
use App\Notice;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $information = Information::find(1);
        $feature = "Feature";
        return view('welcome', compact('information', 'feature'));
    }

    public function notice(){
        $notices = Notice::all();
        return view('notice', compact('notices'));
    }
    public function about(){
        return view('about');
    }
}
