<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use DateTime;
use DateTimeZone;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class FacilityController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facilities = \App\Facility::all();
        $categories = DB::select( DB::raw("SELECT DISTINCT Category FROM facilities WHERE Type = 'Approval'"));
        $id = Auth::user()->id;
        $targets = \App\User::where('ID', $id)->get();
        foreach ($targets as $target) {
            $user["role"] = $target -> role;
            $user["penalty_status"] = $target -> penalty_status;
        }

        return view('approval', ['user' => $user, 'allFacilities' => $facilities, 'allCategories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::select( DB::raw("SELECT DISTINCT Category FROM facilities"));
        return view('approvalcreateFacility', ['allCategories' => $categories]);
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
        $image_filename = NULL;
        $image_mime = NULL;
        $image_original_filename = NULL;

        if($request->file('Picture') != NULL) {
            $image = $request->file('Picture');
            $extension = $image->getClientOriginalExtension();
            Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));
            $image_filename = $image->getFilename().'.'.$extension;
            $image_mime = $image->getClientMimeType();
            $image_original_filename = $image->getClientOriginalName();
        }

        \App\Facility::create([
            'Name' => $request->get('Name'),
            'Category' => $request->get('Category'),
            'Location' => $request->get('Location'),
            'Type' => $request->get('Type'),
            'Capacity' => $request->get('Capacity'),
            'filename' => $image_filename,
            'mime' => $image_mime,
            'original_filename' => $image_original_filename,
            'Status' => $request->get('Status'),
            'Description' => $request->get('Description'),
        ]);

        return redirect('approval');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $table = array(
            array("no","no","no","no","no","no","no"),
            array("no","no","no","no","no","no","no"),
            array("no","no","no","no","no","no","no"),
            array("no","no","no","no","no","no","no"),
            array("no","no","no","no","no","no","no"),
            array("no","no","no","no","no","no","no"),
            array("no","no","no","no","no","no","no"),
            array("no","no","no","no","no","no","no"),
            array("no","no","no","no","no","no","no"),
            array("no","no","no","no","no","no","no"),
            array("no","no","no","no","no","no","no"),
            array("no","no","no","no","no","no","no"),
            array("no","no","no","no","no","no","no"),
            array("no","no","no","no","no","no","no"),
            array("no","no","no","no","no","no","no"),
            array("no","no","no","no","no","no","no"));

        $timezone = new DateTimeZone('Asia/Seoul');
        $today = new DateTime('now', $timezone);

        $todaystr1 = $today->format('m/d');
        $today->modify('+1 day');
        $todaystr2 = $today->format('m/d');
        $today->modify('+1 day');
        $todaystr3 = $today->format('m/d');
        $today->modify('+1 day');
        $todaystr4 = $today->format('m/d');
        $today->modify('+1 day');
        $todaystr5 = $today->format('m/d');
        $today->modify('+1 day');
        $todaystr6 = $today->format('m/d');
        $today->modify('+1 day');
        $todaystr7 = $today->format('m/d');

        $facilities = \App\Facility::where('Facility_ID', $id)->get();
        $timeslots1 = \App\Timeslot::where('date', $todaystr1)->where('facility_id',$id)->get();
        $timeslots2 = \App\Timeslot::where('date', $todaystr2)->where('facility_id',$id)->get();
        $timeslots3 = \App\Timeslot::where('date', $todaystr3)->where('facility_id',$id)->get();
        $timeslots4 = \App\Timeslot::where('date', $todaystr4)->where('facility_id',$id)->get();
        $timeslots5 = \App\Timeslot::where('date', $todaystr5)->where('facility_id',$id)->get();
        $timeslots6 = \App\Timeslot::where('date', $todaystr6)->where('facility_id',$id)->get();
        $timeslots7 = \App\Timeslot::where('date', $todaystr7)->where('facility_id',$id)->get();

        foreach ($timeslots1 as $timeslot){
            if ($timeslot->start_time == '8am') {
                $i=0;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][0] = "fill";
                }
            }
            if ($timeslot->start_time == '9am') {
                $i=1;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][0] = "fill";
                }
            }
            if ($timeslot->start_time == '10am') {
                $i=2;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][0] = "fill";
                }
            }
            if ($timeslot->start_time == '11am') {
                $i=3;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][0] = "fill";
                }
            }
            if ($timeslot->start_time == '12pm') {
                $i=4;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][0] = "fill";
                }
            }
            if ($timeslot->start_time == '1pm') {
                $i=5;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][0] = "fill";
                }
            }
            if ($timeslot->start_time == '2pm') {
                $i=6;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][0] = "fill";
                }
            }
            if ($timeslot->start_time == '3pm') {
                $i=7;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][0] = "fill";
                }
            }
            if ($timeslot->start_time == '4pm') {
                $i=8;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][0] = "fill";
                }
            }
            if ($timeslot->start_time == '5pm') {
                $i=9;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][0] = "fill";
                }
            }
            if ($timeslot->start_time == '6pm') {
                $i=10;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][0] = "fill";
                }
            }
            if ($timeslot->start_time == '7pm') {
                $i=11;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][0] = "fill";
                }
            }
            if ($timeslot->start_time == '8pm') {
                $i=12;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][0] = "fill";
                }
            }
            if ($timeslot->start_time == '9pm') {
                $i=13;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][0] = "fill";
                }
            }
            if ($timeslot->start_time == '10pm') {
                $i=14;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][0] = "fill";
                }
            }
            if ($timeslot->start_time == '11pm') {
                $i=15;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][0] = "fill";
                }
            }
        }

        foreach ($timeslots2 as $timeslot){
            if ($timeslot->start_time == '8am') {
                $i=0;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][1] = "fill";
                }
            }
            if ($timeslot->start_time == '9am') {
                $i=1;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][1] = "fill";
                }
            }
            if ($timeslot->start_time == '10am') {
                $i=2;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][1] = "fill";
                }
            }
            if ($timeslot->start_time == '11am') {
                $i=3;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][1] = "fill";
                }
            }
            if ($timeslot->start_time == '12pm') {
                $i=4;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][1] = "fill";
                }
            }
            if ($timeslot->start_time == '1pm') {
                $i=5;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][1] = "fill";
                }
            }
            if ($timeslot->start_time == '2pm') {
                $i=6;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][1] = "fill";
                }
            }
            if ($timeslot->start_time == '3pm') {
                $i=7;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][1] = "fill";
                }
            }
            if ($timeslot->start_time == '4pm') {
                $i=8;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][1] = "fill";
                }
            }
            if ($timeslot->start_time == '5pm') {
                $i=9;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][1] = "fill";
                }
            }
            if ($timeslot->start_time == '6pm') {
                $i=10;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][1] = "fill";
                }
            }
            if ($timeslot->start_time == '7pm') {
                $i=11;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][1] = "fill";
                }
            }
            if ($timeslot->start_time == '8pm') {
                $i=12;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][1] = "fill";
                }
            }
            if ($timeslot->start_time == '9pm') {
                $i=13;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][1] = "fill";
                }
            }
            if ($timeslot->start_time == '10pm') {
                $i=14;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][1] = "fill";
                }
            }
            if ($timeslot->start_time == '11pm') {
                $i=15;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][1] = "fill";
                }
            }
        }

        foreach ($timeslots3 as $timeslot){
            if ($timeslot->start_time == '8am') {
                $i=0;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][2] = "fill";
                }
            }
            if ($timeslot->start_time == '9am') {
                $i=1;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][2] = "fill";
                }
            }
            if ($timeslot->start_time == '10am') {
                $i=2;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][2] = "fill";
                }
            }
            if ($timeslot->start_time == '11am') {
                $i=3;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][2] = "fill";
                }
            }
            if ($timeslot->start_time == '12pm') {
                $i=4;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][2] = "fill";
                }
            }
            if ($timeslot->start_time == '1pm') {
                $i=5;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][2] = "fill";
                }
            }
            if ($timeslot->start_time == '2pm') {
                $i=6;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][2] = "fill";
                }
            }
            if ($timeslot->start_time == '3pm') {
                $i=7;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][2] = "fill";
                }
            }
            if ($timeslot->start_time == '4pm') {
                $i=8;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][2] = "fill";
                }
            }
            if ($timeslot->start_time == '5pm') {
                $i=9;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][2] = "fill";
                }
            }
            if ($timeslot->start_time == '6pm') {
                $i=10;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][2] = "fill";
                }
            }
            if ($timeslot->start_time == '7pm') {
                $i=11;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][2] = "fill";
                }
            }
            if ($timeslot->start_time == '8pm') {
                $i=12;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][2] = "fill";
                }
            }
            if ($timeslot->start_time == '9pm') {
                $i=13;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][2] = "fill";
                }
            }
            if ($timeslot->start_time == '10pm') {
                $i=14;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][2] = "fill";
                }
            }
            if ($timeslot->start_time == '11pm') {
                $i=15;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][2] = "fill";
                }
            }
        }

        foreach ($timeslots4 as $timeslot){
            if ($timeslot->start_time == '8am') {
                $i=0;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][3] = "fill";
                }
            }
            if ($timeslot->start_time == '9am') {
                $i=1;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][3] = "fill";
                }
            }
            if ($timeslot->start_time == '10am') {
                $i=2;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][3] = "fill";
                }
            }
            if ($timeslot->start_time == '11am') {
                $i=3;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][3] = "fill";
                }
            }
            if ($timeslot->start_time == '12pm') {
                $i=4;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][3] = "fill";
                }
            }
            if ($timeslot->start_time == '1pm') {
                $i=5;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][3] = "fill";
                }
            }
            if ($timeslot->start_time == '2pm') {
                $i=6;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][3] = "fill";
                }
            }
            if ($timeslot->start_time == '3pm') {
                $i=7;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][3] = "fill";
                }
            }
            if ($timeslot->start_time == '4pm') {
                $i=8;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][3] = "fill";
                }
            }
            if ($timeslot->start_time == '5pm') {
                $i=9;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][3] = "fill";
                }
            }
            if ($timeslot->start_time == '6pm') {
                $i=10;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][3] = "fill";
                }
            }
            if ($timeslot->start_time == '7pm') {
                $i=11;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][3] = "fill";
                }
            }
            if ($timeslot->start_time == '8pm') {
                $i=12;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][3] = "fill";
                }
            }
            if ($timeslot->start_time == '9pm') {
                $i=13;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][3] = "fill";
                }
            }
            if ($timeslot->start_time == '10pm') {
                $i=14;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][3] = "fill";
                }
            }
            if ($timeslot->start_time == '11pm') {
                $i=15;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][3] = "fill";
                }
            }
        }

        foreach ($timeslots5 as $timeslot){
            if ($timeslot->start_time == '8am') {
                $i=0;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][4] = "fill";
                }
            }
            if ($timeslot->start_time == '9am') {
                $i=1;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][4] = "fill";
                }
            }
            if ($timeslot->start_time == '10am') {
                $i=2;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][4] = "fill";
                }
            }
            if ($timeslot->start_time == '11am') {
                $i=3;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][4] = "fill";
                }
            }
            if ($timeslot->start_time == '12pm') {
                $i=4;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][4] = "fill";
                }
            }
            if ($timeslot->start_time == '1pm') {
                $i=5;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][4] = "fill";
                }
            }
            if ($timeslot->start_time == '2pm') {
                $i=6;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][4] = "fill";
                }
            }
            if ($timeslot->start_time == '3pm') {
                $i=7;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][4] = "fill";
                }
            }
            if ($timeslot->start_time == '4pm') {
                $i=8;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][4] = "fill";
                }
            }
            if ($timeslot->start_time == '5pm') {
                $i=9;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][4] = "fill";
                }
            }
            if ($timeslot->start_time == '6pm') {
                $i=10;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][4] = "fill";
                }
            }
            if ($timeslot->start_time == '7pm') {
                $i=11;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][4] = "fill";
                }
            }
            if ($timeslot->start_time == '8pm') {
                $i=12;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][4] = "fill";
                }
            }
            if ($timeslot->start_time == '9pm') {
                $i=13;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][4] = "fill";
                }
            }
            if ($timeslot->start_time == '10pm') {
                $i=14;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][4] = "fill";
                }
            }
            if ($timeslot->start_time == '11pm') {
                $i=15;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][4] = "fill";
                }
            }
        }

        foreach ($timeslots6 as $timeslot){
            if ($timeslot->start_time == '8am') {
                $i=0;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][5] = "fill";
                }
            }
            if ($timeslot->start_time == '9am') {
                $i=1;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][5] = "fill";
                }
            }
            if ($timeslot->start_time == '10am') {
                $i=2;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][5] = "fill";
                }
            }
            if ($timeslot->start_time == '11am') {
                $i=3;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][5] = "fill";
                }
            }
            if ($timeslot->start_time == '12pm') {
                $i=4;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][5] = "fill";
                }
            }
            if ($timeslot->start_time == '1pm') {
                $i=5;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][5] = "fill";
                }
            }
            if ($timeslot->start_time == '2pm') {
                $i=6;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][5] = "fill";
                }
            }
            if ($timeslot->start_time == '3pm') {
                $i=7;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][5] = "fill";
                }
            }
            if ($timeslot->start_time == '4pm') {
                $i=8;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][5] = "fill";
                }
            }
            if ($timeslot->start_time == '5pm') {
                $i=9;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][5] = "fill";
                }
            }
            if ($timeslot->start_time == '6pm') {
                $i=10;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][5] = "fill";
                }
            }
            if ($timeslot->start_time == '7pm') {
                $i=11;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][5] = "fill";
                }
            }
            if ($timeslot->start_time == '8pm') {
                $i=12;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][5] = "fill";
                }
            }
            if ($timeslot->start_time == '9pm') {
                $i=13;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][5] = "fill";
                }
            }
            if ($timeslot->start_time == '10pm') {
                $i=14;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][5] = "fill";
                }
            }
            if ($timeslot->start_time == '11pm') {
                $i=15;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][5] = "fill";
                }
            }
        }

        foreach ($timeslots7 as $timeslot){
            if ($timeslot->start_time == '8am') {
                $i=0;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][6] = "fill";
                }
            }
            if ($timeslot->start_time == '9am') {
                $i=1;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][6] = "fill";
                }
            }
            if ($timeslot->start_time == '10am') {
                $i=2;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][6] = "fill";
                }
            }
            if ($timeslot->start_time == '11am') {
                $i=3;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][6] = "fill";
                }
            }
            if ($timeslot->start_time == '12pm') {
                $i=4;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][6] = "fill";
                }
            }
            if ($timeslot->start_time == '1pm') {
                $i=5;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][6] = "fill";
                }
            }
            if ($timeslot->start_time == '2pm') {
                $i=6;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][6] = "fill";
                }
            }
            if ($timeslot->start_time == '3pm') {
                $i=7;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][6] = "fill";
                }
            }
            if ($timeslot->start_time == '4pm') {
                $i=8;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][6] = "fill";
                }
            }
            if ($timeslot->start_time == '5pm') {
                $i=9;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][6] = "fill";
                }
            }
            if ($timeslot->start_time == '6pm') {
                $i=10;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][6] = "fill";
                }
            }
            if ($timeslot->start_time == '7pm') {
                $i=11;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][6] = "fill";
                }
            }
            if ($timeslot->start_time == '8pm') {
                $i=12;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][6] = "fill";
                }
            }
            if ($timeslot->start_time == '9pm') {
                $i=13;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][6] = "fill";
                }
            }
            if ($timeslot->start_time == '10pm') {
                $i=14;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][6] = "fill";
                }
            }
            if ($timeslot->start_time == '11pm') {
                $i=15;
                for ($j=0; $j<($timeslot->duration); $j++) {
                    $k = $i + $j;
                    $table[$k][6] = "fill";
                }
            }
        }   

        return view('approvalshowfacility',compact('facilities', 'table'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    $facilities = \App\Facility::where('Facility_ID', $id)->get();
    $categories = DB::select( DB::raw("SELECT DISTINCT Category FROM facilities"));

        return view('approvaleditfacility',compact('facilities','categories'));

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
            $image_filename = NULL;
            $image_mime = NULL;
            $image_original_filename = NULL;

            if($request->file('Picture') != NULL) {
                $image = $request->file('Picture');
                $extension = $image->getClientOriginalExtension();
                Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));
                $image_filename = $image->getFilename().'.'.$extension;
                $image_mime = $image->getClientMimeType();
                $image_original_filename = $image->getClientOriginalName();
            }
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
               'filename' => $image_filename,
                'mime' => $image_mime,
                'original_filename' => $image_original_filename,
               'Status' => $request->Status,
                'Description' => $request->get('Description'),
               ];
               \App\Facility::where('Facility_ID',$id)->update($update);

        return redirect('/approval')->with('success', 'Facility has been updated!!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function updateFacility($data)
     {
         $facility = $this->find($data['Facility_ID']);
         $facility->Name = $data['Name'];
         $facility->Category = $data['Category'];
         $facility->Location = $data['Location'];
         $facility->Type = $data['Type'];
         $facility->Capacity = $data['Capacity'];
         $facility->filename = $data['filename'];
         $facility->mime = $data['mime'];
         $facility->original_filename = $data['original_filename'];
         $facility->Status = $data['Status'];
         $facility->Description = $data['Description'];
         $facility->save();
         return 1;
     }
    public function destroy($id)
    {
        //Timeslot and Reservation deletes
        \App\Timeslot::where('facility_id',$id)->delete();
        \App\Reservation::where('facility_id',$id)->delete();
        //facility gets deleted
        $facilities = \App\Facility::find($id);
        $facilities -> delete();

       return redirect('/approval');
    }
}
