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

        $timeslot_id = DB::table('timeslot')->where([
            ['date', '=', $request->get('date')],
            ['start_time', '=', $request->get('start_time')],
            ['facility_id', '=', $request->get('facility_id')],
        ])->get();

        \App\Reservation::create([
            'type' => $request->get('type'),
            'user_id' => $request->get('user_id'),
            'timeslot_id' => $timeslot_id,
            'facility_id' => $request->get('facility_id'),
            'reservation_status' => $request->get('reservation_status'),
            'purpose' => $request->get('purpose'),
            'number' => $request->get('number'),
        ]);
        
        return redirect('approval/reservation', [alltimeslot_id=>$timeslot_id]);
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
