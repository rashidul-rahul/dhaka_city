<?php

namespace App\Http\Controllers\Moderator;

use App\Category;
use App\Content;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = Content::all();
        return view('moderator.content.index', compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('moderator.content.create', compact('categories'));
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
            'image'=>'required|mimes:png,jpg,jpeg',
            'content'=>"required|string",
            'category_id'=>'required',
        ]);

        $image = $request->image;
        $slug = Str::slug($request->name, '-');
        if(isset($image)){
            $currentDateTime = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDateTime.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('contents')){
                Storage::disk('public')->makeDirectory('contents');
            }

            Storage::disk('public')->put('contents/'.$imageName, file_get_contents($image));
            $link = $imageName;
        } else {
            $link = "No_image";
        }
        $content = new Content();
        $content->name = $request->name;
        $content->image = $link;
        $content->content = $request->content;
        $content->category_id = $request->category_id;
        $content->save();
        Toastr::success('Content Uploaded', 'Success');
        return redirect()->route('moderator.content.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        return view('moderator.content.show', compact('content'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
        $categories = Category::all();
        return view('moderator.content.edit', compact('content', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content)
    {
        $this->validate($request, [
            'name'=>'required|string',
            'image'=>'mimes:png,jpg,jpeg',
            'content'=>"required|string",
            'category_id'=>'required',
        ]);

        $image = $request->image;
        $slug = Str::slug($request->name, '-');
        if(isset($image)){
            $currentDateTime = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDateTime.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('contents')){
                Storage::disk('public')->makeDirectory('contents');
            }

            //delete old file
            if(Storage::disk('public')->exists('contents/'.$content->image)){
                Storage::disk('public')->delete('contents/'.$content->image);
            }

            Storage::disk('public')->put('contents/'.$imageName, file_get_contents($image));
            $link = $imageName;
        } else {
            $link = $content->image;
        }
        $content->name = $request->name;
        $content->image = $link;
        $content->content = $request->content;
        $content->category_id = $request->category_id;
        $content->save();
        Toastr::success('Content Updated', 'Success');
        return redirect()->route('moderator.content.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        if(Storage::disk('public')->exists('contents/'.$content->image)){
            Storage::disk('public')->delete('contents/'.$content->image);
        }
        $content->delete();
        Toastr::success('Content Deleted', 'Success');
        return redirect()->back();
    }
}
