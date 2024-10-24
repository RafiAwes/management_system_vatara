<?php

namespace App\Http\Controllers\Trainer\Auth;

use Carbon\Carbon;
use App\Models\trainer;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Auth\Events\Registered;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('Trainer.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {


        if ($request->hasFile('image')) {
            $get_image = $request->file('image');
            $image_name = time().'.'.$get_image->getClientOriginalExtension();
            $get_image->move(public_path('trainer_image'), $image_name);

            // ID generator
            $currentYear = Carbon::now()->format('y');
            $randomPart = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
            $uniqueId = 'st' . $currentYear . $randomPart;

            // Check if the generated ID already exists
            while (trainer::where('trainer_id', $uniqueId)->exists()) {
                $randomPart = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
                $uniqueId = 'tr' . $currentYear . $randomPart;
            }


             //password generator
            //  $samplePass = 'hello';
             $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
             $char_length = strlen($characters);
             $password = '';
             for($i = 0; $i<8; $i++){
             $password .= $characters[rand(0,$char_length-1)];
             }

            $trainer = trainer::create([
                "trainer_name" => $request->trainer_name,
                "image" => 'trainer_image/' . $image_name,
                "address" => $request->address,
                "date_of_birth" => $request->date_of_birth,
                "height" => $request->height,
                "weight" => $request->weight,
                "contact_number" => $request->contact_number,
                "email" => $request->email,
                "date_of_joining" => Carbon::now(),
                "gender" => 'female',
                "trainer_id" => $uniqueId,
                //"batch_id" => $request->batch_id,
                // "attended_class" => 0,
                "honorarium" => $request->honorarium,
                "position" => "Trainer",
                "status" => 'ative',
                "created_at" => Carbon::now(),
                "enc_pass"=> Crypt::encryptString($password),
                'password' => Hash::make($password),
            ]);
            event(new Registered($trainer));
            return back();
        }
    }
}
