<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\slot;
use App\Models\batch;
use App\Models\student;
use App\Models\trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class batchController extends Controller
{
    public function createBatchPage(){
        $slots = slot::all();
        $trainers = trainer::all();
        return view('batch.createBatch',compact('slots','trainers'));
    }

    public function create(Request $request){

        $validatedData = $request->validate([
            'batch_name' => 'required',
            'total_classes' => 'required',
            'starting_date' => 'required',
            'numberOfStudents' => 'required',
            'trainer_id' => 'required',
            // 'time' => 'required',
            // 'days' => 'required',
        ], [
            'batch_name.required' => 'Name field is required.',
            'total_classes.required' => 'Total classes are required.',
            'starting_date.required' => 'Starting date is required is required.',
            'numberOfStudents.required' => 'Number of students must be mentioned.',
            'class_time.required' => 'Class time is mandetory.',
            // 'days.required' => 'Class time is mandetory.',
        ]);


        $batch = batch::where('slot_id',$request->slot_id)->exists();
        $trainer = trainer::where('trainer_id',$request->trainer_id)->exists();

        if($batch && $trainer){
            // Toastr::error('Ooops', 'Time and days already exists', ["positionClass" => "toast-top-center"]);
            return redirect()->route('batch.create');
        }else{
            batch::insert([
                "name" => $request->batch_name,
                "total_classes" => $request->total_classes,
                "starting_date" => $request->starting_date,
                "number_of_students" => $request->numberOfStudents,
                "slot_id" => $request->slot_id,
                "trainer_id" => $request->trainer_id,
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

    public function batchDetails($id){
        $students = student::where('batch_id',$id)
                    ->get();
        $batch = DB::table('batches')
        ->join('slots', 'batches.slot_id', '=', 'slots.id')
        ->select('batches.*', 'slots.days', 'slots.starting_time')
        ->first();

        return view('batch.batchDetails',['students'=>$students, 'batch'=>$batch]);
    }




}
