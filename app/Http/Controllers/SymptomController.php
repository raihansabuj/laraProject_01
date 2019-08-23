<?php

namespace App\Http\Controllers;

use App\Symptom;
use App\SymptomType;
use Illuminate\Http\Request;
use DB;
class SymptomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $symptoms = Symptom::all();
        $symptomTypes = SymptomType::all('title', 'id'); 
        return view('admin.symptom.index', compact('symptoms', 'symptomTypes'));
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
    public function insert(Request $request)
    {
        $symptom = new Symptom;
        $symptom->title = $request->title;
        $symptom->symptom_type = $request->symptom_type;
        $symptom->added_by = 1;
        $symptom->status = 1;
        $symptom->description = $request->description;
        $symptom->save();

        //echo "success";
        $symptoms = Symptom::all();
        $symptomTypes = SymptomType::all('title', 'id'); 
        return view('admin.symptom.index', compact('symptoms', 'symptomTypes'));

        //return view('admin.symptom.index');
    }
    public function getSymptom()
    {
        $data['data'] = Symptom::all();
        if (count($data) > 0) {
            return view('admin.symptom.insert', $data);
        }else{
            return view('admin.symptom.insert');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Symptom  $symptom
     * @return \Illuminate\Http\Response
     */
    public function show(Symptom $symptom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Symptom  $symptom
     * @return \Illuminate\Http\Response
     */
    public function edit(Symptom $symptom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Symptom  $symptom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Symptom $symptom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Symptom  $symptom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Symptom $symptom)
    {
        //
    }
}
