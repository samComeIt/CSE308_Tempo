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
        return view('mypageViewCancel', ['allUsers'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
