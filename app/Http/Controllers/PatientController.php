<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function create(){
    	return view('admin.pages.patient.create');
    }

    /**
     * Show all data in tabular display for manage with management links
     *
     * @return \Illuminate\Http\Response
     */
    
    public function manage(){
        $patients = Patient::all();
        return view('admin.pages.patient.manage', ['patients' => $patients]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patient = new Patient;
        $patient->patient_name = $request->patient_name;
        $patient->phone = $request->phone;
        $patient->blood = 1;
        $patient->sample_type_id = 1;
        $patient->age = $request->age;
        $patient->sex = $request->sex;
        $patient->country = 1;
        $patient->state = $request->state;
        $patient->district = $request->district;
        $patient->city = 1;
        $patient->area = $request->area;
        $patient->address = $request->address;
        $patient->added_by = 1; //Pull user id from loggedin session
        //$patient->added_on = date('Y-m-d H:i:s');
        $patient->status = 1;
        $patient->remarks = $request->remarks;

        $patient->save();
         
        return redirect()->route('admin.patient.create');
        
    }

    public function getData(){
        $patients = Patient::all();
        return view('admin.patient.create', ['patients' => $patients]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
