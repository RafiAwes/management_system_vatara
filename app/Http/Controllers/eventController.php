<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\trainer;
use Illuminate\Http\Request;

class eventController extends Controller
{
    public function eventForm(){
        $trainers = trainer::all();
        return view('admin.event.createEvent',['trainers'=>$trainers]);
    }

    public function createEvent(Request $request){

        $multichecks = $request->input('days');
        $days = implode(',', $multichecks);
        $startingTime = $request->starting_time;
        event::insert([
            "title" => $request->title,
            "time" => $request->time,
            "days" => $days,
            "date" => $request->date,
            "total_participants" => 0,
            "supervisor" => $request->supervisor,
            "registration_fees" => $request->regfees,
            "description" => $request->description,
        ]);
        return back();

    }

    public function adminEventList(){
        $events = event::all();

        return view('admin.events', ['events'=>$events]);

    }
    public function studentEventList(){
        $events = event::all();

        return view('Student.events', ['events'=>$events]);

    }
    public function trainerEventList(){
        $events = event::all();

        return view('Trainer.events', ['events'=>$events]);

    }
}
