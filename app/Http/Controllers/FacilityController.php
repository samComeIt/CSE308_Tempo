<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use DateTime;
use DateTimeZone;

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

        return view('approval', ['allFacilities' => $facilities, 'allCategories' => $categories]);
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
        \App\Facility::create([
            'Name' => $request->get('Name'),
            'Category' => $request->get('Category'),
            'Location' => $request->get('Location'),
            'Type' => $request->get('Type'),
            'Capacity' => $request->get('Capacity'),
            'Picture'=> $request->get('Picture'),
            'Status' => $request->get('Status'),
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
        $row1 = array('1'=>"no", '2'=>"no", '3'=>"no", '4'=>"no", '5'=>"no", '6'=>"no", '7'=>"no");
        $row2 = array('1'=>"no", '2'=>"no", '3'=>"no", '4'=>"no", '5'=>"no", '6'=>"no", '7'=>"no");
        $row3 = array('1'=>"no", '2'=>"no", '3'=>"no", '4'=>"no", '5'=>"no", '6'=>"no", '7'=>"no");
        $row4 = array('1'=>"no", '2'=>"no", '3'=>"no", '4'=>"no", '5'=>"no", '6'=>"no", '7'=>"no");
        $row5 = array('1'=>"no", '2'=>"no", '3'=>"no", '4'=>"no", '5'=>"no", '6'=>"no", '7'=>"no");
        $row6 = array('1'=>"no", '2'=>"no", '3'=>"no", '4'=>"no", '5'=>"no", '6'=>"no", '7'=>"no");
        $row7 = array('1'=>"no", '2'=>"no", '3'=>"no", '4'=>"no", '5'=>"no", '6'=>"no", '7'=>"no");
        $row8 = array('1'=>"no", '2'=>"no", '3'=>"no", '4'=>"no", '5'=>"no", '6'=>"no", '7'=>"no");
        $row9 = array('1'=>"no", '2'=>"no", '3'=>"no", '4'=>"no", '5'=>"no", '6'=>"no", '7'=>"no");
        $row10 = array('1'=>"no", '2'=>"no", '3'=>"no", '4'=>"no", '5'=>"no", '6'=>"no", '7'=>"no");
        $row11 = array('1'=>"no", '2'=>"no", '3'=>"no", '4'=>"no", '5'=>"no", '6'=>"no", '7'=>"no");
        $row12 = array('1'=>"no", '2'=>"no", '3'=>"no", '4'=>"no", '5'=>"no", '6'=>"no", '7'=>"no");
        $row13 = array('1'=>"no", '2'=>"no", '3'=>"no", '4'=>"no", '5'=>"no", '6'=>"no", '7'=>"no");
        $row14 = array('1'=>"no", '2'=>"no", '3'=>"no", '4'=>"no", '5'=>"no", '6'=>"no", '7'=>"no");
        $row15 = array('1'=>"no", '2'=>"no", '3'=>"no", '4'=>"no", '5'=>"no", '6'=>"no", '7'=>"no");
        $row16 = array('1'=>"no", '2'=>"no", '3'=>"no", '4'=>"no", '5'=>"no", '6'=>"no", '7'=>"no");

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
        $timeslots1 = \App\Timeslot::where('date', $todaystr1)->get();
        $timeslots2 = \App\Timeslot::where('date', $todaystr2)->get();
        $timeslots3 = \App\Timeslot::where('date', $todaystr3)->get();
        $timeslots4 = \App\Timeslot::where('date', $todaystr4)->get();
        $timeslots5 = \App\Timeslot::where('date', $todaystr5)->get();
        $timeslots6 = \App\Timeslot::where('date', $todaystr6)->get();
        $timeslots7 = \App\Timeslot::where('date', $todaystr7)->get();

        foreach ($timeslots1 as $timeslot){
            if ($timeslot->start_time == '8am') {
                $row1['1'] = "fill";
            }
            if ($timeslot->start_time == '9am') {
                $row2['1'] = "fill";
            }
            if ($timeslot->start_time == '10am') {
                $row3['1'] = "fill";
            }
            if ($timeslot->start_time == '11am') {
                $row4['1'] = "fill";
            }
            if ($timeslot->start_time == '12pm') {
                $row5['1'] = "fill";
            }
            if ($timeslot->start_time == '1pm') {
                $row6['1'] = "fill";
            }
            if ($timeslot->start_time == '2pm') {
                $row7['1'] = "fill";
            }
            if ($timeslot->start_time == '3pm') {
                $row8['1'] = "fill";
            }
            if ($timeslot->start_time == '4pm') {
                $row9['1'] = "fill";
            }
            if ($timeslot->start_time == '5pm') {
                $row10['1'] = "fill";
            }
            if ($timeslot->start_time == '6pm') {
                $row11['1'] = "fill";
            }
            if ($timeslot->start_time == '7pm') {
                $row12['1'] = "fill";
            }
            if ($timeslot->start_time == '8pm') {
                $row13['1'] = "fill";
            }
            if ($timeslot->start_time == '9pm') {
                $row14['1'] = "fill";
            }
            if ($timeslot->start_time == '10pm') {
                $row15['1'] = "fill";
            }
            if ($timeslot->start_time == '11pm') {
                $row16['1'] = "fill";
            }
        }

        foreach ($timeslots2 as $timeslot){
            if ($timeslot->start_time == '8am') {
                $row1['2'] = "fill";
            }
            if ($timeslot->start_time == '9am') {
                $row2['2'] = "fill";
            }
            if ($timeslot->start_time == '10am') {
                $row3['2'] = "fill";
            }
            if ($timeslot->start_time == '11am') {
                $row4['2'] = "fill";
            }
            if ($timeslot->start_time == '12pm') {
                $row5['2'] = "fill";
            }
            if ($timeslot->start_time == '1pm') {
                $row6['2'] = "fill";
            }
            if ($timeslot->start_time == '2pm') {
                $row7['2'] = "fill";
            }
            if ($timeslot->start_time == '3pm') {
                $row8['2'] = "fill";
            }
            if ($timeslot->start_time == '4pm') {
                $row9['2'] = "fill";
            }
            if ($timeslot->start_time == '5pm') {
                $row10['2'] = "fill";
            }
            if ($timeslot->start_time == '6pm') {
                $row11['2'] = "fill";
            }
            if ($timeslot->start_time == '7pm') {
                $row12['2'] = "fill";
            }
            if ($timeslot->start_time == '8pm') {
                $row13['2'] = "fill";
            }
            if ($timeslot->start_time == '9pm') {
                $row14['2'] = "fill";
            }
            if ($timeslot->start_time == '10pm') {
                $row15['2'] = "fill";
            }
            if ($timeslot->start_time == '11pm') {
                $row16['2'] = "fill";
            }
        }

        foreach ($timeslots3 as $timeslot){
            if ($timeslot->start_time == '8am') {
                $row1['3'] = "fill";
            }
            if ($timeslot->start_time == '9am') {
                $row2['3'] = "fill";
            }
            if ($timeslot->start_time == '10am') {
                $row3['3'] = "fill";
            }
            if ($timeslot->start_time == '11am') {
                $row4['3'] = "fill";
            }
            if ($timeslot->start_time == '12pm') {
                $row5['3'] = "fill";
            }
            if ($timeslot->start_time == '1pm') {
                $row6['3'] = "fill";
            }
            if ($timeslot->start_time == '2pm') {
                $row7['3'] = "fill";
            }
            if ($timeslot->start_time == '3pm') {
                $row8['3'] = "fill";
            }
            if ($timeslot->start_time == '4pm') {
                $row9['3'] = "fill";
            }
            if ($timeslot->start_time == '5pm') {
                $row10['3'] = "fill";
            }
            if ($timeslot->start_time == '6pm') {
                $row11['3'] = "fill";
            }
            if ($timeslot->start_time == '7pm') {
                $row12['3'] = "fill";
            }
            if ($timeslot->start_time == '8pm') {
                $row13['3'] = "fill";
            }
            if ($timeslot->start_time == '9pm') {
                $row14['3'] = "fill";
            }
            if ($timeslot->start_time == '10pm') {
                $row15['3'] = "fill";
            }
            if ($timeslot->start_time == '11pm') {
                $row16['3'] = "fill";
            }
        }

        foreach ($timeslots4 as $timeslot){
            if ($timeslot->start_time == '8am') {
                $row1['4'] = "fill";
            }
            if ($timeslot->start_time == '9am') {
                $row2['4'] = "fill";
            }
            if ($timeslot->start_time == '10am') {
                $row3['4'] = "fill";
            }
            if ($timeslot->start_time == '11am') {
                $row4['4'] = "fill";
            }
            if ($timeslot->start_time == '12pm') {
                $row5['4'] = "fill";
            }
            if ($timeslot->start_time == '1pm') {
                $row6['4'] = "fill";
            }
            if ($timeslot->start_time == '2pm') {
                $row7['4'] = "fill";
            }
            if ($timeslot->start_time == '3pm') {
                $row8['4'] = "fill";
            }
            if ($timeslot->start_time == '4pm') {
                $row9['4'] = "fill";
            }
            if ($timeslot->start_time == '5pm') {
                $row10['4'] = "fill";
            }
            if ($timeslot->start_time == '6pm') {
                $row11['4'] = "fill";
            }
            if ($timeslot->start_time == '7pm') {
                $row12['4'] = "fill";
            }
            if ($timeslot->start_time == '8pm') {
                $row13['4'] = "fill";
            }
            if ($timeslot->start_time == '9pm') {
                $row14['4'] = "fill";
            }
            if ($timeslot->start_time == '10pm') {
                $row15['4'] = "fill";
            }
            if ($timeslot->start_time == '11pm') {
                $row16['4'] = "fill";
            }
        }

        foreach ($timeslots5 as $timeslot){
            if ($timeslot->start_time == '8am') {
                $row1['5'] = "fill";
            }
            if ($timeslot->start_time == '9am') {
                $row2['5'] = "fill";
            }
            if ($timeslot->start_time == '10am') {
                $row3['5'] = "fill";
            }
            if ($timeslot->start_time == '11am') {
                $row4['5'] = "fill";
            }
            if ($timeslot->start_time == '12pm') {
                $row5['5'] = "fill";
            }
            if ($timeslot->start_time == '1pm') {
                $row6['5'] = "fill";
            }
            if ($timeslot->start_time == '2pm') {
                $row7['5'] = "fill";
            }
            if ($timeslot->start_time == '3pm') {
                $row8['5'] = "fill";
            }
            if ($timeslot->start_time == '4pm') {
                $row9['5'] = "fill";
            }
            if ($timeslot->start_time == '5pm') {
                $row10['5'] = "fill";
            }
            if ($timeslot->start_time == '6pm') {
                $row11['5'] = "fill";
            }
            if ($timeslot->start_time == '7pm') {
                $row12['5'] = "fill";
            }
            if ($timeslot->start_time == '8pm') {
                $row13['5'] = "fill";
            }
            if ($timeslot->start_time == '9pm') {
                $row14['5'] = "fill";
            }
            if ($timeslot->start_time == '10pm') {
                $row15['5'] = "fill";
            }
            if ($timeslot->start_time == '11pm') {
                $row16['5'] = "fill";
            }
        }

        foreach ($timeslots6 as $timeslot){
            if ($timeslot->start_time == '8am') {
                $row1['6'] = "fill";
            }
            if ($timeslot->start_time == '9am') {
                $row2['6'] = "fill";
            }
            if ($timeslot->start_time == '10am') {
                $row3['6'] = "fill";
            }
            if ($timeslot->start_time == '11am') {
                $row4['6'] = "fill";
            }
            if ($timeslot->start_time == '12pm') {
                $row5['6'] = "fill";
            }
            if ($timeslot->start_time == '1pm') {
                $row6['6'] = "fill";
            }
            if ($timeslot->start_time == '2pm') {
                $row7['6'] = "fill";
            }
            if ($timeslot->start_time == '3pm') {
                $row8['6'] = "fill";
            }
            if ($timeslot->start_time == '4pm') {
                $row9['6'] = "fill";
            }
            if ($timeslot->start_time == '5pm') {
                $row10['6'] = "fill";
            }
            if ($timeslot->start_time == '6pm') {
                $row11['6'] = "fill";
            }
            if ($timeslot->start_time == '7pm') {
                $row12['6'] = "fill";
            }
            if ($timeslot->start_time == '8pm') {
                $row13['6'] = "fill";
            }
            if ($timeslot->start_time == '9pm') {
                $row14['6'] = "fill";
            }
            if ($timeslot->start_time == '10pm') {
                $row15['6'] = "fill";
            }
            if ($timeslot->start_time == '11pm') {
                $row16['6'] = "fill";
            }
        }

        foreach ($timeslots7 as $timeslot){
            if ($timeslot->start_time == '8am') {
                $row1['7'] = "fill";
            }
            if ($timeslot->start_time == '9am') {
                $row2['7'] = "fill";
            }
            if ($timeslot->start_time == '10am') {
                $row3['7'] = "fill";
            }
            if ($timeslot->start_time == '11am') {
                $row4['7'] = "fill";
            }
            if ($timeslot->start_time == '12pm') {
                $row5['7'] = "fill";
            }
            if ($timeslot->start_time == '1pm') {
                $row6['7'] = "fill";
            }
            if ($timeslot->start_time == '2pm') {
                $row7['7'] = "fill";
            }
            if ($timeslot->start_time == '3pm') {
                $row8['7'] = "fill";
            }
            if ($timeslot->start_time == '4pm') {
                $row9['7'] = "fill";
            }
            if ($timeslot->start_time == '5pm') {
                $row10['7'] = "fill";
            }
            if ($timeslot->start_time == '6pm') {
                $row11['7'] = "fill";
            }
            if ($timeslot->start_time == '7pm') {
                $row12['7'] = "fill";
            }
            if ($timeslot->start_time == '8pm') {
                $row13['7'] = "fill";
            }
            if ($timeslot->start_time == '9pm') {
                $row14['7'] = "fill";
            }
            if ($timeslot->start_time == '10pm') {
                $row15['7'] = "fill";
            }
            if ($timeslot->start_time == '11pm') {
                $row16['7'] = "fill";
            }
        }

        return view('approvalshowfacility',compact('facilities', 'row1', 'row2', 'row3', 'row4', 'row5', 'row6', 'row7', 'row8', 'row9', 'row10', 'row11', 'row12', 'row13', 'row14', 'row15', 'row16'));
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
             $facility->Picture = $data['Picture'];
             $facility->Status = $data['Status'];
             $facility->save();
             return 1;
     }
    public function destroy($id)
    {
        $facilities = \App\Facility::find($id);
        $facilities -> delete();
       return redirect('/approval');
    }
}
