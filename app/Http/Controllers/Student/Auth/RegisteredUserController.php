<?php

namespace App\Http\Controllers\Student\Auth;

use Carbon\Carbon;
use App\Models\slot;
use App\Models\batch;
use App\Models\report;
use App\Models\student;
use Faker\Provider\Image;
//use Illuminate\Support\Carbon;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
// use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManager;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\Eloquent\Collection;
use Intervention\Image\Drivers\Imagick\Driver;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {

        $admin_name = Auth::guard('admin')->user();
        $batches = batch::where('status','active')
        ->orderBy('id','asc')
        ->get();


        return view('Student.auth.register',compact('admin_name','batches'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        if ($request->hasFile('image')) {
            //image processing
            $get_image = $request->file('image');
            $image_name = time().'.'.$get_image->getClientOriginalExtension();
            $get_image->move(public_path('student_image'), $image_name);

            // ID generator
            $currentYear = Carbon::now()->format('y');
            $randomPart = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
            $uniqueId = 'st' . $currentYear . $randomPart;

            // Check if the generated ID already exists
            while (student::where('student_id', $uniqueId)->exists()) {
                $randomPart = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
                $uniqueId = 'st' . $currentYear . $randomPart;
            }

            //password generator
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $char_length = strlen($characters);
            $password = '';
            for($i = 0; $i<8; $i++){
            $password .= $characters[rand(0,$char_length-1)];
            }

             // Get the current month and year using Carbon
            $currentMonth = Carbon::now()->format('F');  // Example: October
            $currentYear = Carbon::now()->year;

            $monthandyear = report::where('month',$currentMonth)->where('year',$currentYear)->first();
            // $samplePass = 'hello';

            //fees calculating
            $totalFees = $request->payableFees - $request->admissionFees;

            $student = student::create([
                "student_name" => $request->student_name,
                "image" => 'student_image/' . $image_name,
                "address" => $request->address,
                "date_of_birth" => $request->date_of_birth,
                "height" => $request->height,
                "weight" => $request->weight,
                "contact_number" => $request->contact_number,
                "email" => $request->email,
                "date_of_joining" => Carbon::now(),
                "gender" => "female",
                "student_id" => $uniqueId,
                "batch_id" => $request->batch_id,
                "attended_class" => 0,
                "fees" => $totalFees,
                "position" => "White Belt",
                "status" => 'learning',
                "created_at" => Carbon::now(),
                "enc_pass"=> Crypt::encryptString($password),
                "password" => Hash::make($password),
            ]);

            if($monthandyear){
               $monthandyear->increment('students_admitted',1);
            }
            else{
                report::insert([
                    'month' => $currentMonth,
                    'year' => $currentYear,
                    'students_admitted' => 1,
                ]);
            }


            event(new Registered($student));
            return back();
        }

    }
}
