<?php

namespace App\Http\Controllers;

use App\Models\batch;
use App\Models\trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class trainerController extends Controller
{
    public function trainerList(){
        $trainers = trainer::orderBy('id','asc')
        ->get();

        foreach($trainers as $trainer){
            $trainer->dec_pass = Crypt::decryptString($trainer->enc_pass);
        }

        return view('Trainer.trainerlist',['trainers'=>$trainers]);
    }

    public function trainerBatches(){
        $trainerId = Auth::guard('trainer')->id();
        $batches = DB::table('batches')
                    ->join('slots', 'batches.slot_id', '=', 'slots.id')
                    ->where('trainer_id',$trainerId)
                    ->select('batches.*', 'slots.days', 'slots.starting_time')
                    ->get();
        return view('Trainer.trainersBatch',['batches'=>$batches]);
    }

    public function trainerDetails($id){
        $trainer = trainer::where('id',$id)->first();

        return view('Trainer.details',['trainer'=>$trainer]);
    }
    // public function
}
