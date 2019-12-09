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
        return view('message', ['allReservations' => $reservations3, 'allTimeslots'=> $timeslots3]);

    }


    public function mypageReservation()
    {
        $reservations2 = \App\Reservation::all();
        return view('mypage', ['allReservations' => $reservations2]);
    }

    public function mypageCurrent()
    {
        $reservations3 = \App\Reservation::all();
        $timeslots3 = \App\Timeslot::all();
        return view('mypageCurrent', ['allReservations' => $reservations3, 'allTimeslots'=> $timeslots3]);
    }

    public function mypagePast()
    {
        $reservations3 = \App\Reservation::all();
        $timeslots3 = \App\Timeslot::all();
        return view('mypagePast', ['allReservations' => $reservations3, 'allTimeslots'=> $timeslots3]);
    }

    public function mypageCurrentCancel($id){
        \App\Reservation::where('timeslot_id', $id)->update(['reservation_status'=> 'Cancel']);
        \App\Timeslot::where('timeslot_id', $id)->update(['duration'=> 'null']);
        $reservations3 = \App\Reservation::all();
        $timeslots3 = \App\Timeslot::all();

        return view('mypageCurrent', ['allReservations' => $reservations3, 'allTimeslots'=> $timeslots3]);

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

    public function store(Request $request)
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

        return redirect('/approval');
    }

}
