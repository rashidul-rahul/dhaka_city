<?php

namespace App\Http\Controllers;

use App\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index(){
        return view('admin.information.index');
    }

    public function edit(){
        $information = Information::find(1);
        return view('admin.information.edit', compact('information'));
    }
}
