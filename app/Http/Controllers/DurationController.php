<?php

namespace App\Http\Controllers;

use App\Duration;
use Illuminate\Http\Request;
use DB;
class DurationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $duration = Duration::all();
        $symptoms = DB::table('symptoms')->where([
            ['status', '=', '1'],
        ])->get();
        

        return view('admin.duration.index', compact('duration', 'symptoms'));

    }
    public function insert(Request $request)
    {
        $duration = new Duration;
        $duration->title = $request->title;
        $duration->symptom_id = $request->symptom_id;
        $duration->note = $request->note;
        $duration->save();

        //echo "success";
        $duration = Duration::all();
        $symptoms = DB::table('symptoms')->where([
                        ['status', '=', '1'],
                    ])->get();
        return view('admin.duration.index', compact('duration', 'symptoms'));
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
     * @param  \App\Duration  $duration
     * @return \Illuminate\Http\Response
     */
    public function show(Duration $duration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Duration  $duration
     * @return \Illuminate\Http\Response
     */
    public function edit(Duration $duration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Duration  $duration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Duration $duration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Duration  $duration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Duration $duration)
    {
        //
    }
}
