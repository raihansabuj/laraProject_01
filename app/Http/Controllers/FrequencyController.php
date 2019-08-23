<?php

namespace App\Http\Controllers;

use App\Frequency;
use Illuminate\Http\Request;
use DB;
class FrequencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $frequency = Frequency::all();
        $symptoms = DB::table('symptoms')->where([
            ['status', '=', '1'],
        ])->get();
        

        return view('admin.frequency.index', compact('frequency', 'symptoms'));

    }
    public function insert(Request $request)
    {
        $frequency = new Frequency;
        $frequency->title = $request->title;
        $frequency->symptom_id = $request->symptom_id;
        $frequency->note = $request->note;
        $frequency->save();

        //echo "success";
        $frequency = Frequency::all();
        $symptoms = DB::table('symptoms')->where([
                        ['status', '=', '1'],
                    ])->get();
        return view('admin.frequency.index', compact('frequency', 'symptoms'));
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
     * @param  \App\Frequency  $frequency
     * @return \Illuminate\Http\Response
     */
    public function show(Frequency $frequency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Frequency  $frequency
     * @return \Illuminate\Http\Response
     */
    public function edit(Frequency $frequency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Frequency  $frequency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Frequency $frequency)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Frequency  $frequency
     * @return \Illuminate\Http\Response
     */
    public function destroy(Frequency $frequency)
    {
        //
    }
}
