<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'PagesController@index')->name('index');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/test', 'PagesController@test')->name('test');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
 
//Route::get('/disease', 'DiseaseController@index')->name('disease');
//Routte::get('/admin/symptom', 'SymptomController@getSymptom');
//Routte::get('/admin/symptom/create', 'SymptomController@create');
//Routte::get('/admin/symptom/create', 'SymptomController@store');


Route::group(['prefix' => 'admin'], function(){
	Route::get('/', 'AdminPagesController@index')->name('admin.index');
	//Patient Management in ADMIN TEmplate
	Route::get('/patient/create', 'PatientController@create')->name('admin.patient.create');
	Route::post('/patient/create', 'PatientController@store')->name('admin.patient.store');
	Route::get('/patient/manage', 'PatientController@manage')->name('admin.patient.manage');
	//Patient Management in Default Template
	Route::get('/patient/index', 'PatientController@index')->name('admin.patient.index');
	Route::post('/patient/insert', 'PatientController@insert')->name('admin.patient.insert');
	Route::get('/patient/assesment/{id}', 'PatientController@assesment')->name('admin.patient.assesment');


	//Symptom
	Route::post('/symptom/insert', 'SymptomController@insert')->name('admin.symptom.insert');
 	Route::get('/symptom/index', 'SymptomController@index')->name('admin.symptom.index');
	
	 //SymptompType
	Route::get('/symptomType/index', 'SymptomTypeController@index')->name('admin.symptomType.index');
	Route::post('/symptomType/insert', 'SymptomTypeController@insert')->name('admin.symptomType.insert');
	
	 //Symptomp Severity
	Route::get('/severity/index', 'SeverityController@index')->name('admin.severity.index');
	Route::post('/severity/insert', 'SeverityController@insert')->name('admin.severity.insert');
	
	 //Symptomp Frequency
	Route::get('/frequency/index', 'FrequencyController@index')->name('admin.frequency.index');
	Route::post('/frequency/insert', 'FrequencyController@insert')->name('admin.frequency.insert');
	
	 //Symptomp Frequency
	Route::get('/duration/index', 'DurationController@index')->name('admin.duration.index');
	Route::post('/duration/insert', 'DurationController@insert')->name('admin.duration.insert');
	
	
	 //Symptomp Frequency
	Route::get('/location/index', 'LocationController@index')->name('admin.location.index');
	Route::post('/location/insert', 'LocationController@insert')->name('admin.location.insert');
	
});

 