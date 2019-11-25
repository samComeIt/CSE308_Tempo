<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = \App\Reservation::all();
        return view('approval', ['allReservations' => $reservations]);

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
