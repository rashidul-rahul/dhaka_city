<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Complain;
use App\Content;
use App\Notice;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;

class DashboardController extends Controller
{
    public function index(){
        $new_complain = Complain::where('is_view', false)->count();
        Session::put('new_complain', $new_complain);
        $user_count = User::all()->count();
        if($user_count == null){
            $user_count = 0;
        }
        $content_count = Content::all()->count();
        if($content_count == 0){
            $content_count = 0;
        }
        $complain_count = Complain::all()->count();
        if($complain_count == 0){
            $complain_count = 0;
        }
        $notice_count = Notice::all()->count();
        if($notice_count == 0){
            $notice_count = 0;
        }
        return view('admin.dashboard', compact("content_count", "user_count", "complain_count", "notice_count"));
    }
}
