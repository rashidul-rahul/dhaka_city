<?php

namespace App\Http\Controllers\Moderator;

use App\Information;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InformationController extends Controller
{
    public function index(){
        return view('moderator.information.index');
    }

    public function edit(){
        $information = Information::find(1);
        return view('moderator.information.edit', compact('information'));
    }

    public function update(Request $request){
        $information = Information::find(1);
        $this->validate($request, [
            'man'=>'required|number',
            'woman'=>'required|number',
            'people'=>'required|number',
            'place'=>'required|number',

        ]);

    }
}
