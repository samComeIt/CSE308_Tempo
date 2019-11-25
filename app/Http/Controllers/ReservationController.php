<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = \App\Reservation::all();
        return view('approval', ['allReservations' => $reservations]);

    }
    public function approvalReservation(Request $request)
    {
        \App\Reservation::create([
            'type' => $request->get('type'),
            'user_id' => $request->get('user_id'),
            'timeslot_id' => $timeslot_id,
            'facility_id' => $request->get('facility_id'),
            'reservation_status' => $request->get('reservation_status'),
            'purpose' => $request->get('purpose'),
            'number' => $request->get('number'),
        ]);

        return redirect('approval/timeslot');
    }
    public function create()
    {
        $timeslots = DB::select( DB::raw("SELECT * FROM TimeSlot WHERE Type='Approval'"));
        return view('secondStepApprovalReservation', ['allTimeslot' => $timeslots]);
    }

    public function select($id)
    {

        $facilities = \App\Facility::where('Facility_ID', $id)->get();
        $categories = DB::select( DB::raw("SELECT DISTINCT Category FROM facilities"));

        return view('reservation.update',compact('facilities','categories'));

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
        //
        \App\Reservation::updated([
            'type' => $request->get('type'),
            'user_id' => $request->get('user_id'),
            'timeslot_id' => $request->get('timeslot_id'),
            'facility_id' => $request->get('facility_id'),
            'reservation_status' => $request->get('reservation_status'),
            'purpose' => $request->get('purpose'),
            'number' => $request->get('number'),
        ]);

        return redirect('approval');
    }
    public function destroy($id)
    {
        $facilities = \App\Reservation::find($id);

        //change it to cancel for 'resevation' and change the status to 'no' for timeslot
        return redirect('/approval/timeslot');
    }
}
