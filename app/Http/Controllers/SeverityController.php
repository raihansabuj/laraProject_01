<?php

namespace App\Http\Controllers;

use App\Severity;
use App\Symptom;
use DB;
use Illuminate\Http\Request;

class SeverityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $severity = Severity::all();
        $symptoms = DB::table('symptoms')->where([
            ['status', '=', '1'],
        ])->get();
        

        return view('admin.severity.index', compact('severity', 'symptoms'));

    }
    public function insert(Request $request)
    {
        $severity = new Severity;
        $severity->title = $request->title;
        $severity->symptom_id = $request->symptom_id;
        $severity->note = $request->note;
        $severity->save();

        //echo "success";
        $severity = Severity::all();
        $symptoms = DB::table('symptoms')->where([
                        ['status', '=', '1'],
                    ])->get();
        return view('admin.severity.index', compact('severity', 'symptoms'));
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
     * @param  \App\Severity  $severity
     * @return \Illuminate\Http\Response
     */
    public function show(Severity $severity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Severity  $severity
     * @return \Illuminate\Http\Response
     */
    public function edit(Severity $severity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Severity  $severity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Severity $severity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Severity  $severity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Severity $severity)
    {
        //
    }
}
