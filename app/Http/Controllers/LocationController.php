<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;
use DB;
class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $location = Location::all();
        $symptoms = DB::table('symptoms')->where([
            ['status', '=', '1'],
        ])->get();
        

        return view('admin.location.index', compact('location', 'symptoms'));

    }
    public function insert(Request $request)
    {
        $location = new Location;
        $location->title = $request->title;
        $location->symptom_id = $request->symptom_id;
        $location->note = $request->note;
        $location->save();

        //echo "success";
        $location = Location::all();
        $symptoms = DB::table('symptoms')->where([
                        ['status', '=', '1'],
                    ])->get();
        return view('admin.location.index', compact('location', 'symptoms'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        //
    }
}
