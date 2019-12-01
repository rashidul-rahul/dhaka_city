<?php

namespace App\Http\Controllers\User;

use App\Notice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NoticeController extends Controller
{
    public function index()
    {
        $notices = Notice::latest()->get();
        return view('user.notice.index', compact('notices'));
    }

    public function show(Notice $notice)
    {
        return view('user.notice.show', compact("notice"));
    }
}
