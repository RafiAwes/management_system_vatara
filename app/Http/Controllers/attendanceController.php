<?php

namespace App\Http\Controllers;

use App\Models\batch;
use App\Models\student;
use App\Models\attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class attendanceController extends Controller
{
    public function viewBatches(){
        // $batches = DB::table('batches')
        // ->join('slots', 'batches.slot_id', '=', 'slots.id')
        // ->where('batches.id',$id)
        // ->select('batches.*', 'slots.days', 'slots.starting_time')
        // ->first();
        $trainerId = Auth::guard('trainer')->id();
        $batches = batch::where('trainer_id', $trainerId )->get();

        return view('Trainer.batchCardlist',['batches'=>$batches]);
    }

    public function attendancePage($id){

        $students = student::where('batch_id',$id)->orderBy('id','asc')->paginate(100);
        $batch = DB::table('batches')
        ->join('slots', 'batches.slot_id', '=', 'slots.id')
        ->where('batches.id', $id)
        ->select('batches.*', 'slots.days', 'slots.starting_time')
        ->first();
        $batchDays = explode(',', $batch->days);

        $batches = batch::all();

        $currentDay = date('l');
        // dd($currentDay);
        $notAllowed = attendance::where('batch_id',$id)
                    ->whereDate('submission_date',now()->toDateString())
                    ->exists();

                    if($batch) { // Check if the batch exists
                        $batchDays = array_map('trim', $batchDays); // Trim spaces from each element in the array

                        if (!empty($batchDays) && in_array($currentDay, $batchDays, true)) {
                            if($notAllowed){
                                // Toastr::success('Ooops', 'Already taken', ["positionClass" => "toast-top-center"]);
                                return back();
                            }else{
                                // Toastr::success('Attendance', 'Take todays attendance', ["positionClass" => "toast-top-center"]);
                                return view('Trainer.attendanceList', compact('students','id'));
                            }

                        } else {
                            // Toastr::warning('This class is not available today', 'Ooops', ["positionClass" => "toast-top-center"]);
                            return back();
                        }
                    } else {
                        // Toastr::error('Batch not found', 'Error', ["positionClass" => "toast-top-center"]);
                        return back();
                    }
        // if($notAllowed){
        //     Toastr::success('Ooops', 'Already taken', ["positionClass" => "toast-top-center"]);
        //     return back();
        // }else{

        // }
    }
    public function saveAttendance(Request $request){
        // finding the batch with batch id and decoding days
        $batch = batch::find($request->batch_id);
        $total_class = $batch->total_classes;

        // $slot = SlotModel::find($request->batch_id);
        foreach($request->input('attendance') as $studentId => $isChecked) {
            $status = $isChecked ? 'present' : 'absent';
            attendance::insert([
                "student_id" => $studentId,
                "batch_id" => $request->batch_id,
                "status" => $status,
                "submission_date" => Carbon::now()->toDateString(),
                "month_name" => Carbon::now()->format('F'),
                "year" => Carbon::now()->year,
                "created_at" => Carbon::now()
            ]);
            $stdnt = student::find($studentId);
            $stdnt->increment('attended_class');

            $stdnt_cls = $stdnt->attended_class;
            $total_class = $batch->total_classes;
            if($stdnt_cls >= $total_class){
                // $stdnt->update(['status' => 'Completed']);
                // dd($stdnt->status);
                student::where('id',$studentId)->update(['status' => 'Completed']);
            }
        }

        $batch->increment('classes_done');
        return redirect()->route('take.attendance');

    }
}
