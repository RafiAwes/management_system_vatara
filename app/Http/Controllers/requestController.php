<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class requestController extends Controller
{
    public function submit(Request $request){
        if ($request->hasFile('image')) {
            //image processing
            $get_image = $request->file('image');
            $image_name = time().'.'.$get_image->getClientOriginalExtension();
            $get_image->move(public_path('request_images'), $image_name);

            request::insert([
                'name' => $request->_name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'password' => Hash::make($request->password),
                ]);
            return back();
        }
    }
}
