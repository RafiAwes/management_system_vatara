<?php

namespace App\Http\Controllers;

use App\Model\student;
use App\Model\batch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class studentController extends Controller
{

    public function studentWelcome(){
        return view('studentWelcome');
    }

    public function viewStudentList(){
         $students = DB::table('students')
         -> join('batches','batches.id','=','students.batch_id')
         -> select('students.*','batches.name as batch_name')
         ->orderBy('id','asc')
         -> get();
         foreach($students as $student){
            $student->dec_pass = Crypt::decryptString($student->enc_pass);
        }

         return view('Student.studentList', ['students'=>$students]);
    }
}
