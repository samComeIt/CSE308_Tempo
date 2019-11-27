<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TimeslotController extends Controller
{
    public function openStore(Request $request)
    {
        //
        \App\Timeslot::create([
            'date' => $request->get('date'),
            'start_time' => $request->get('start_time'),
            'duration' => $request->get('duration'),
            'facility_id' => $request->get('facility_id'),
            ]);

        return redirect('open');
    }

    public function approvalStore(Request $request)
    {
        //
        \App\Timeslot::create([
            'date' => $request->get('date'),
            'start_time' => $request->get('start_time'),
            'duration' => $request->get('duration'),
            'facility_id' => $request->get('facility_id'),
            ]);

        $target= DB::table('timeslots')->where([
            'date' => $request->get('date'),
            'start_time' => $request->get('start_time'),
            'duration' => $request->get('duration'),
            'facility_id' => $request->get('facility_id'),

        ])->get();
        
        foreach($target as $timeslot) {
            $timeslot_id = $timeslot->timeslot_id;
        }

            foreach($target as $timeslot){
                $timeslot_id = $timeslot->timeslot_id;
            }

        return view('secondApprovalRervation', $timeslot_id);
    }

    public function cancel($id)
    {
        $timeSelect = \App\Timeslot::find($id);
        $timeSelect -> delete();
        return redirect('/approval');
    }
    public function index(){
        return view('mypage');
    }
}
