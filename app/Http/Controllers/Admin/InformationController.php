<?php

namespace App\Http\Controllers\Admin;

use App\Information;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InformationController extends Controller
{
    public function index(){
        $information = Information::find(1);
        return view('admin.information.index', compact('information'));
    }

    public function edit(){
        $information = Information::find(1);
        return view('admin.information.edit', compact('information'));
    }

    public function update(Request $request){
        $information = Information::find(1);
        $this->validate($request, [
            'man'=>'required|numeric',
            'woman'=>'required|numeric',
            'people'=>'required|numeric',
            'place'=>'required|numeric',

        ]);
        $information->man = $request->man;
        $information->woman = $request->woman;
        $information->people = $request->people;
        $information->place = $request->place;
        $information->save();
        Toastr::success('Information Updated', 'Success');
        return redirect()->route('admin.information.index');


    }
}
