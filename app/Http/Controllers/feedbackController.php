<?php

namespace App\Http\Controllers;

use App\Models\feedback;
use Illuminate\Http\Request;

class feedbackController extends Controller
{
    public function feedbackForm(){
        return view("Student.feedback");
    }

    public function sendFeedback(Request $request){
        feedback::insert([
            'title'=> $request->title,
            'content'=> $request->content,
        ]);

        return back();
    }

    public function feedbacks(){
        $feedbacks = feedback::all();
        return view('admin.feedbacks',['feedbacks'=>$feedbacks]);
    }
}
