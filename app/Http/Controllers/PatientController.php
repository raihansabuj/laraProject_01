<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Symptom;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;
use DB;
class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();
        /*
        $symptoms = DB::table('symptoms')->where([
            ['status', '=', '1'],
        ])->get();
        */
        //$sampleTypes = DiagnosticTestSampleType::all();
        $sampleTypes = DB::table('diagnostic_test_sample_types')->get();
        $insertedId= "none";    
        return view('admin.patient.index', compact('patients', 'sampleTypes', 'insertedId'));

    }
    public function insert(Request $request)
    {
        
        $patient = new Patient;

        
        //$date = new \DateTime();
        //$unixTimeStamp = $date->getTimestamp();

        // Form validation
        $request->validate([
            'sex'              =>  'required',
            'fingure_print'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'phone'             =>  'required|max:11|unique:patients,phone',
            'age'               =>  'numeric',

        ]);
        // Get current user
        //$addeb_by = User::findOrFail(auth()->user()->id);
         
        // Check if a profile image has been uploaded
        if ($request->has('fingure_print')) {
            // Get image file
            $image = $request->file('fingure_print');
            // Make a image name based on user name and current timestamp
            $name = str_slug($request->input('name')).'_'.time();
            // Define folder path
            $folder = '/uploads/images/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            UploadTrait::uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $patient->fingure_print = $filePath;

            //TO Retrive the image, use in View file
            //{{ asset(auth()->user()->image) }}
        }

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
        //$patient->added_on= $unixTimeStamp; fingure_print image code_sl parent_id_code year
        $year = date('y');

        $patient->year = $year;//19
        $patient->status = 1;
        $patient->assesment_status = 1;
        $patient->remarks = $request->remarks;

        $code_sl = Patient::getMAXSerial($year);//1
        $patient->code_sl = $code_sl;
        $code_sl_format= str_pad($code_sl, 4, "0", STR_PAD_LEFT);//0001
        $patient->parent_id_code = $year.$code_sl_format;  //190001

        //$patient->save();
        if($patient->save()){
            $insertedId = $patient->id;
        }

        return redirect('admin.patient.assesment'.$patient->id);

       /*
        //echo "success";
        $patients = Patient::all();
        $sampleTypes = DB::table('diagnostic_test_sample_types')->get();
        return view('admin.patient.index', compact('patients', 'sampleTypes', 'insertedId'));
         */
    }
   
    // Symptom Assesment Started with this function of the Patient
    public function assesment(Patient $patient)
    {
        //$model = Patient;
        //$modelSymptom = new Symptom;
        //$patient_id = $patient;

        $allPatients = Patient::all();
        $sampleTypes = DB::table('diagnostic_test_sample_types')->get();

        return view('admin.patient.assesment', ['patient' => Patient::findOrFail($patient), 'sampleTypes' => $sampleTypes, 'allPatients' => $allPatients]);

        //return view('admin.patient.index', compact('patients', 'sampleTypes'));
    }
/* */
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
        return view('admin.symptom.insert', ['patients' => $patients]);
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
