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

        $target= DB::table('timeslots')->where([
            'date' => $request->get('date'),
            'start_time' => $request->get('start_time'),
            'duration' => $request->get('duration'),
            'facility_id' => $request->get('facility_id'),

        ])->get();

        foreach($target as $timeslot){
            $timeslot_id = $timeslot->timeslot_id;
            $timeslot_facillity_id = $timeslot->facility_id;
        }
        
        $target = DB::table('facilities')->where([
            'Facility_ID' => $request->get('facility_id'),
        ])->get();
        
        foreach($target as $facility) {
            $facility_capacity = $facility->Capacity;
        }

        return view('openMakeReservation', compact('timeslot_id', 'timeslot_facillity_id', 'facility_capacity'));
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

        $target = DB::table('timeslots')->where([
            'date' => $request->get('date'),
            'start_time' => $request->get('start_time'),
            'duration' => $request->get('duration'),
            'facility_id' => $request->get('facility_id'),

        ])->get();

        foreach($target as $timeslot){
            $timeslot_id = $timeslot->timeslot_id;
            $timeslot_facillity_id = $timeslot->facility_id;
        }
        
        $target = DB::table('facilities')->where([
            'Facility_ID' => $request->get('facility_id'),
        ])->get();
        
        foreach($target as $facility) {
            $facility_capacity = $facility->Capacity;
        }

        return view('approvalMakeReservation', compact('timeslot_id', 'timeslot_facillity_id', 'facility_capacity'));
    }

    public function destroy($id)
    {
        DB::table('timeslots')->where('timeslot_id', '=', $id)->delete();
        return redirect('approval');
    }

    public function index(){
        return view('mypage');
    }

    public function update(Request $request, $id)
    {

        $update = [
            'reservation_status'=>$request->reservation_status,
        ];
        \App\Reservation::where('timeslot_id',$id)->update($update);

        $updateReservation = \App\Reservation::where('timeslot_id', $id)->get();
        $updateTimeslot = \App\Timeslot::where('timeslot_id', $id)->get();
        return view('messageUpdate', ['oneUpdateReservation'=>$updateReservation, 'oneTimeRes'=>$updateTimeslot]);
    }

    public function messageSelectUpdate($id)
    {
        $updateReservation = \App\Reservation::where('timeslot_id', $id)->get();
        $updateTimeslot = \App\Timeslot::where('timeslot_id', $id)->get();

        return view('messageUpdate', ['oneUpdateReservation'=>$updateReservation, 'oneTimeRes'=>$updateTimeslot]);

    }
}
