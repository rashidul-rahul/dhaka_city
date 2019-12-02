<?php

namespace App\Http\Controllers;

use App\Feedback;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function create(Request $request){
        if ($request->feedback == null){
            Toastr::error('Feedback cant be Empty', 'Error');
            return redirect()->back();
        }
        $feedback = new Feedback();
        $feedback->user_id = Auth::user()->id;
        $feedback->complain_id = $request->complain;
        $feedback->feedback = $request->feedback;
        $feedback->save();
        Toastr::success('Feedback submitted', 'Success');
        return redirect()->back();
    }
}
