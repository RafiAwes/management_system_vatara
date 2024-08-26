<?php

namespace App\Http\Controllers;

use App\Models\batch;
use Carbon\Carbon;
use Illuminate\Http\Request;

class batchController extends Controller
{
    public function createBatchPage(){
        return view('batch.createBatch');
    }

    public function create(Request $request){

        $validatedData = $request->validate([
            'batch_name' => 'required',
            'total_classes' => 'required',
            'starting_date' => 'required',
            'numberOfStudents' => 'required',
            'class_time' => 'required',
            'days' => 'required',
        ], [
            'batch_name.required' => 'Name field is required.',
            'total_classes.required' => 'Total classes are required.',
            'starting_date.required' => 'Starting date is required is required.',
            'numberOfStudents.required' => 'Number of students must be mentioned.',
            'class_time.required' => 'Class time is mandetory.',
            // 'days.required' => 'Class time is mandetory.',
        ]);

        $multichecks = $request->input('days');
        $days = implode(',', $multichecks);
        $batch = batch::where('class_time',$request->class_time)->exists();
        $d = batch::where('days',$days)->exists();
        if($d && $batch){
            // Toastr::error('Ooops', 'Time and days already exists', ["positionClass" => "toast-top-center"]);
            return redirect()->route('batch.createBatch');
        }else{
            batch::insert([
                "name" => $request->batch_name,
                "total_classes" => $request->total_classes,
                "starting_date" => $request->starting_date,
                "number_of_students" => $request->numberOfStudents,
                "class_time" => $request->class_time,
                "days" => $days,
                "status" => 'active',
                "classes_done" => 0,
                "created_at"=> carbon::now(),
            ]);
            // Toastr::success('New slot created', 'Created', ["positionClass" => "toast-top-center"]);

            return back();
            // return redirect()->route('view.slots');
        }

    }

    public function batchList(){
        $batches = batch::orderBy('id','asc')
        ->get();

        return view('batch.batchList',['batches'=>$batches]);
    }


}
