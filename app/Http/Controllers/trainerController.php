<?php

namespace App\Http\Controllers;

use App\Models\trainer;
use Illuminate\Http\Request;

class trainerController extends Controller
{
    public function trainerList(){
        $trainers = trainer::orderBy('id','asc')
        ->get();

        return view('Trainer.trainerlist',['trainers'=>$trainers]);
    }
}
