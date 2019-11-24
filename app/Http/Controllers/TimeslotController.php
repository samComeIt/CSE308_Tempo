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
        \App\Reservation::create([
            'type' => $request->get('type'),
            'user_id' => $request->get('user_id'),
            'timeslot_id' => $request->get('timeslot_id'),
            'facility_id' => $request->get('facility_id'),
            'reservation_status' => $request->get('reservation_status'),
            'purpose' => $request->get('purpose'),
            'number' => $request->get('number'),
        ]);
        $timeslot_id = DB::select( DB::raw("SELECT timeslot_id  FROM Timeslot WHERE Type='Approval'"));

        return redirect('',['allTimeslot_id'=>$timeslot_id]);
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
