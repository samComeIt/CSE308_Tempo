<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = \App\Reservation::all();
        return view('approval', ['allReservations' => $reservations]);

    }
    public function message()
    {
        $reservations3 = \App\Reservation::all();
        $timeslots3 = \App\Timeslot::all();
        $stu_facility = \App\Facility::all();
        return view('message', ['allReservations' => $reservations3, 'allTimeslots'=> $timeslots3, 'allStuFac'=>$stu_facility]);

    }


    public function mypageReservation()
    {
        $reservations3 = \App\Reservation::all();
        $timeslots3 = \App\Timeslot::all();
        $stu_facility = \App\Facility::all();

        return view('mypageCurrent', ['allReservations' => $reservations3, 'allTimeslots'=> $timeslots3, 'allStuFac'=>$stu_facility]);

    }

    public function mypageCurrent()
    {
        $reservations3 = \App\Reservation::all();
        $timeslots3 = \App\Timeslot::all();
        $stu_facility = \App\Facility::all();

        return view('mypageCurrent', ['allReservations' => $reservations3, 'allTimeslots'=> $timeslots3, 'allStuFac'=>$stu_facility]);
    }

    public function mypagePast()
    {
        $reservations3 = \App\Reservation::all();
        $timeslots3 = \App\Timeslot::all();
        $stu_facility = \App\Facility::all();
        return view('mypagePast', ['allReservations' => $reservations3, 'allTimeslots'=> $timeslots3, 'allStuFac'=>$stu_facility]);
    }

    public function mypageCurrentCancel($id){
        \App\Reservation::where('timeslot_id', $id)->update(['reservation_status'=> 'Cancel']);
        $select_reservation = \App\Reservation::where('timeslot_id', $id)->first();
        $select_timeslot = \App\Timeslot::where('timeslot_id', $id)->first();
        //\App\Timeslot::where('timeslot_id', $id)->update(['duration'=> 'null']);

        \App\Cancel::create([
            'timeslot_id' => $select_reservation->timeslot_id,
            'purpose' => $select_reservation->purpose,
            'type'=> $select_reservation->type,
            'user_id'=>$select_reservation->user_id,
            'date'=> $select_timeslot->date,
            'start_time'=> $select_timeslot->start_time,
            'duration'=> $select_timeslot->duration,
            'facility_id'=> $select_reservation->facility_id,
            'reservation_status'=> $select_reservation->reservation_status,
            'number'=> $select_reservation->number,
        ]);
        \App\Timeslot::where('timeslot_id', $id)->delete();

        $reservations3 = \App\Reservation::all();
        $timeslots3 = \App\Timeslot::all();
        $stu_facility = \App\Facility::all();

        return view('mypageCurrent', ['allReservations' => $reservations3, 'allTimeslots'=> $timeslots3, 'allStuFac'=>$stu_facility]);

    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Name' =>'required',
            'Category' =>'required',
            'Location' =>'required',
            'Type' =>'required',
            'Capacity' =>'required',

            'Status' =>'required',
        ]);

        $update = [
            'Name' => $request->Name,
            'Category' => $request->Category,
            'Location' => $request->Location,
            'Type' => $request->Type,
            'Capacity' => $request->Capacity,
            'Picture' => $request->Picture,
            'Status' => $request->Status,
        ];
        \App\Reservation::where('facility_id',$id)->update($update);

        return redirect('/approval/timeslot')->with('success', 'Reservation has been updated!!');
    }

    public function approvalstore(Request $request)
    {
        \App\Reservation::create([
            'type' => $request->get('type'),
            'user_id' => $request->get('user_id'),
            'timeslot_id' => $request->get('timeslot_id'),
            'facility_id' => $request->get('facility_id'),
            'reservation_status' => $request->get('reservation_status'),
            'purpose' => $request->get('purpose'),
            'number' => $request->get('number'),
        ]);
        $id = $request->get('facility_id');
        return redirect('/approval/'.$id);
    }

    public function openstore(Request $request)
    {
        \App\Reservation::create([
            'type' => $request->get('type'),
            'user_id' => $request->get('user_id'),
            'timeslot_id' => $request->get('timeslot_id'),
            'facility_id' => $request->get('facility_id'),
            'reservation_status' => $request->get('reservation_status'),
            'purpose' => $request->get('purpose'),
            'number' => $request->get('number'),
        ]);
        $id = $request->get('facility_id');
        return redirect('/open/'.$id);
    }
}
