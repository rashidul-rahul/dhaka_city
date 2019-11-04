<?php

namespace App\Http\Controllers\Admin;

use App\Notice;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::latest()->get();
        return view('admin.notice.index', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notice.create');
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
           'name'=>'required|string',
           'pdf'=>'required|max:1000',
        ]);
        if($request->pdf->getClientOriginalExtension() != 'pdf'){
            Toastr::error('File must be a pdf', 'Error');
            return redirect()->back();
        }

        $pdfFile = $request->pdf;
        $slug = Str::slug($request->name, '-');
        if(isset($pdfFile)){
            $currentDateTime = Carbon::now()->toDateString();
            $fileName = $slug.'-'.$currentDateTime.'-'.uniqid().'.'.$pdfFile->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('notices')){
                Storage::disk('public')->makeDirectory('notices');
            }

            Storage::disk('public')->put('notices/'.$fileName, file_get_contents($pdfFile));
            $link = $fileName;
        }
        $notice = new Notice();
        $notice->name = $request->name;
        $notice->link = $link;
        $notice->user_id = Auth::id();
        $notice->save();
        Toastr::success('Notice Uploaded', 'Success');
        return redirect()->route('admin.notice.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(Notice $notice)
    {
        return view('admin.notice.show', compact("notice"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit(Notice $notice)
    {
        return view('admin.notice.edit', compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notice $notice)
    {
        $this->validate($request, [
            'name'=>'required|string',
            'pdf'=>'max:1000',
        ]);
        $pdfFile = $request->pdf;
        $slug = Str::slug($request->name, '-');
        if(isset($pdfFile)){
            if($request->pdf->getClientOriginalExtension() != 'pdf'){
                Toastr::error('File must be a pdf', 'Error');
                return redirect()->back();
            }
            $currentDateTime = Carbon::now()->toDateString();
            $fileName = $slug.'-'.$currentDateTime.'-'.uniqid().'.'.$pdfFile->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('notices')){
                Storage::disk('public')->makeDirectory('notices');
            }
            //delete old file
            if(Storage::disk('public')->exists('notices/'.$notice->link)){
                Storage::disk('public')->delete('notices/'.$notice->link);
            }
            //save the file
            Storage::disk('public')->put('notices/'.$fileName, file_get_contents($pdfFile));
            $link = $fileName;
        }else{
            $link = $notice->link;
        }
        $notice->name = $request->name;
        $notice->link = $link;
        $notice->user_id = Auth::id();
        $notice->save();
        Toastr::success('Notice Updated', 'Success');
        return redirect()->route('admin.notice.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notice $notice)
    {
        if(Storage::disk('public')->exists('notices/'.$notice->link)){
            Storage::disk('public')->delete('notices/'.$notice->link);
        }
        $notice->delete();
        Toastr::success('Notice Deleted', 'Success');
        return redirect()->back();
    }
}
