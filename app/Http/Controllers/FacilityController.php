<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

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
        return view('approvalcreatefacility', ['allCategories' => $categories]);
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

    $facilities = \App\Facility::where('Facility_ID', $id)->get();

            return view('approvalshowfacility',compact('facilities'));

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
