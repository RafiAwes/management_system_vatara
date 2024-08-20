<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class studentController extends Controller
{
    public function studentList(){

        $students = candidare::all();
        return view('Student.studentList',['students' => $students]);
    }
}
