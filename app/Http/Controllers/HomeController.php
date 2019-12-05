<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::user()->id;

        $targets = \App\User::where('ID', $id)->get();
        foreach ($targets as $target) {
            $user["role"] = $target -> role;
            $user["penalty_status"] = $target -> penalty_status;
        }

        return view('home', ['user' => $user]);
    }
}
