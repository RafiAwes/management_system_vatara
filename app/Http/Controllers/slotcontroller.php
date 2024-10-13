<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slot;

class slotcontroller extends Controller
{
    public function slotCreatingPage(){
        return view("slot.createslot");
    }

    public function createSlot(Request $request){

        $multichecks = $request->input('days');
        $days = implode(',', $multichecks);
        $startingTime = $request->starting_time;
        $daysExist = slot::where('days',$days)->exists();
        $timeExist = slot::where('starting_time',$startingTime)->exists();
        if($daysExist && $timeExist){
            return back();
        }
        else{
            slot::insert([
                "slot_name" => $request->slot_name,
                "starting_time" => $request->starting_time,
                "days" => $days,
                "ending_time" => $request->ending_time,
            ]);
            return back();
        }

    }
}
