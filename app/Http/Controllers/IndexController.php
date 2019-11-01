<?php

namespace App\Http\Controllers;

use App\Category;
use App\Content;
use App\Information;
use App\Notice;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $information = Information::find(1);
        $feature = "Feature";
        $categories = Category::all();
        return view('welcome', compact('information', 'feature', 'categories'));
    }

    public function notice(){
        $notices = Notice::all();
        return view('notice', compact('notices'));
    }
    public function about(){
        return view('about');
    }
    public function information(){
        $contents = Content::all();
        $categories = Category::all();
        return view('information', compact('contents', 'categories'));
    }
}
