<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
// use App\Model\student;
use App\Model\batch;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

use App\Models\slot;

use Faker\Provider\Image;
use Illuminate\View\View;
//use Illuminate\Support\Carbon;
use Illuminate\Validation\Rules;

// use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManager;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\Eloquent\Collection;
use Intervention\Image\Drivers\Imagick\Driver;

class studentController extends Controller
{

    public function studentWelcome(){
        return view('studentWelcome');
    }

    public function dashboard(Request $request): View
    {
        $student = Auth::user();
        return view('Student.dashboard',['user' => $request->user(),]);
    }

    public function profile($id){
        $student = student::where('id',$id)->first();
        return view('Student.editprofile',['student'=>$student]);
    }

    public function edit(Request $request): RedirectResponse
    {
        if ($request->hasFile('image')) {
            //image processing
            $get_image = $request->file('image');
            $image_name = time().'.'.$get_image->getClientOriginalExtension();
            $get_image->move(public_path('student_image'), $image_name);

            $student = student::where('id', $request->student_id)->update([
                "student_name" => $request->student_name,
                "image" => 'student_image/' . $image_name,
                "address" => $request->address,
                "date_of_birth" => $request->date_of_birth,
                "height" => $request->height,
                "weight" => $request->weight,
                "updated_at" => Carbon::now(),
                "gender" => "female",
                "student_id" => $request->student_id,

            ]);
            // event(new Registered($student));
            return back();
        }
        else{
            $student = student::where('id', $request->student_id)->update([
                "student_name" => $request->student_name,
                "address" => $request->address,
                "date_of_birth" => $request->date_of_birth,
                "height" => $request->height,
                "weight" => $request->weight,
                "updated_at" => Carbon::now(),
                "gender" => "female",
                "student_id" => $request->student_id,

            ]);
            // event(new Registered($student));
            return back();
        }

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
