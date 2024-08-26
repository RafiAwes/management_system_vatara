<?php

namespace App\Http\Controllers;

use App\Model\student;
use App\Model\batch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
    public function viewStudentList(){
         $students = DB::table('students')
         -> join('batches','batches.id','=','students.batch_id')
         -> select('students.*','batches.name as batch_name')
         ->orderBy('id','asc')
         -> get();

         return view('Student.studentList', ['students'=>$students]);
    }
}
