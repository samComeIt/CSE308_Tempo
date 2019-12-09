<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenaltyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $users = \App\User::all();

        $finduser = $request->get('email');

        $find = \App\User::where([
            ['email','LIKE','%' . $finduser . '%'],
        ])->get();


        return view('penalty', ['allUsers' => $find]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        \App\User::where('id', $id)->update(['penalty_status'=> 0]);
        $users = \App\User::all();

        return view('penalty', ['allUsers' => $users]);
    }

    public function reset($id)
    {
        \App\User::where('id', $id)->update(['penalty_status'=> 0]);
        $users = \App\User::all();


        return view('penalty', ['allUsers' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        \App\User::where('id', $id)->update(['penalty_status'=> DB::raw('penalty_status+1')]);
        $users = \App\User::all();

        return view('givePenalty', ['allUsers' => $users]);
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
