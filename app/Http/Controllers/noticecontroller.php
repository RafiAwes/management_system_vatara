<?php

namespace App\Http\Controllers;

use App\Models\notice;
use App\Models\student;
use App\Mail\noticeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class noticecontroller extends Controller
{
    public function noticeform(){
        return view('admin.emails.noticeForm');
    }

    public function sendNotice(Request $request){
        $students = student::all();
        foreach ($students as $student) {
           $student_name = $student->student_name;
        }
        $mailData = [
            'title' => $request->title,
            'student_name'=>$student_name,
            'body' => $request->body,
        ];
        notice::insert([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        // foreach ($mails as $mail) {
        //    dd($mail->mail);
        // }

        foreach ($students as $student) {
            Mail::to($student->email)->send(new noticeMail($mailData));
        }

        // Mail::to('rafiawes4897@gmail.com')->send(new DemoMail($mailData));

        return back();
    }
}
