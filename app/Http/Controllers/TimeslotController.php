<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return redirect('approval');
    }
    
    public function destroy($id)
    {
        $timeSelect = \App\Timeslot::find($id);
        $timeSelect -> delete();
        return redirect('/approval');
    }
    public function index(){
        return view('mypage');
    }
}
