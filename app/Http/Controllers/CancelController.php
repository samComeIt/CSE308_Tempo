<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CancelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //shows only data with reservation_statuc ="Cancel"
        $users = \App\Cancel::all();
        $selectFac = \App\Facility::all();
        $canusers = \App\User::all();

        return view('mypageViewCancel', ['allUsers'=>$users, 'allFacilities'=>$selectFac, 'allCanUsers'=>$canusers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //create cancel table when user/staff cancel reservation
        \App\Cancel::create([
            'timeslot_id' => $request->get('timeslot_id'),
            'purpose' => $request->get('purpose'),
            'type'=> $request->get('type'),
            'user_id'=> $request->get('user_id'),
            'date'=> $request->get('date'),
            'start_time'=> $request->get('start_time'),
            'duration'=> $request->get('duration'),
            'facility_id'=> $request->get('facility_id'),
            'reservation_status'=> $request->get('reservation_status'),
            'number'=> $request->get('number'),
        ]);

        $timeslot_id = $request->get('timeslot_id');
        \App\Reservation::where('id', $timeslot_id)->update(['reservation_status'=> DB::raw('Cancel')]);
        $users = \App\User::all();


        return view('mypageViewCancel', ['allUsers' => $users]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        \App\Reservation::where('timeslot_id', $id)->update(['reservation_status'=> 'Cancel']);
        $select_reservation = \App\Reservation::where('timeslot_id', $id)->first();
        $select_timeslot = \App\Timeslot::where('timeslot_id', $id)->first();

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
        return view('message', ['allReservations' => $reservations3, 'allTimeslots'=> $timeslots3, 'allStuFac'=>$stu_facility]);

    }

    public function messageApprove($id)
    {
        \App\Reservation::where('timeslot_id', $id)->update(['reservation_status'=> 'Accept']);

        $reservations3 = \App\Reservation::all();
        $timeslots3 = \App\Timeslot::all();
        $stu_facility = \App\Facility::all();
        return view('message', ['allReservations' => $reservations3, 'allTimeslots'=> $timeslots3, 'allStuFac'=>$stu_facility]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $res = \App\Reservation::where('timeslot_id', $id)->get();


        return view('messageDetails', compact('res'));
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
