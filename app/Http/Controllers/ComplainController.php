<?php

namespace App\Http\Controllers;

use App\Complain;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use DemeterChain\C;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ComplainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|string',
            'subject' => 'string|required',
            'subject' => 'required|string',
            'complain' =>'string|required',
            'image' => 'mimes:png,jpg,jpeg'
        ]);
        $image = $request->image;
        $slug = Str::slug($request->title, '-');
        if(isset($image)){
            $currentDateTime = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDateTime.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('complain')){
                Storage::disk('public')->makeDirectory('complain');
            }

            Storage::disk('public')->put('complain/'.$imageName, file_get_contents($image));
            $link = $imageName;
        } else {
            $link = "default.jpg";
        }
        $complain = new Complain();
        $complain->title = $request->title;
        $complain->subject = $request->subject;
        $complain->complain = $request->complain;
        $complain->user_id = Auth::user()->id;
        $complain->image = $link;
        $complain->save();
        Toastr::success('Compalain Submitted. We will take action very soon', 'Success');
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function show(Complain $complain)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function edit(Complain $complain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Complain $complain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function destroy(Complain $complain)
    {
        //
    }
}
