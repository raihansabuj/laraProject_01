<?php

namespace App\Http\Controllers;

use App\SymptomType;
use Illuminate\Http\Request;

class SymptomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $symptomTypes = SymptomType::all();
        return view('admin.symptomType.index', compact('symptomTypes'));
    }
    public function insert(Request $request)
    {
        $symptomType = new SymptomType;
        $symptomType->title = $request->title;
        $symptomType->parent_id = 1;
        $symptomType->description = $request->description;
         
        $symptomType->save();

        //echo "success";
        $symptomTypes = SymptomType::all();
        return view('admin.symptomType.index', compact('symptomTypes'));

        //return view('admin.symptom.index');
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
     * @param  \App\SymptomType  $symptomType
     * @return \Illuminate\Http\Response
     */
    public function show(SymptomType $symptomType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SymptomType  $symptomType
     * @return \Illuminate\Http\Response
     */
    public function edit(SymptomType $symptomType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SymptomType  $symptomType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SymptomType $symptomType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SymptomType  $symptomType
     * @return \Illuminate\Http\Response
     */
    public function destroy(SymptomType $symptomType)
    {
        //
    }
}
