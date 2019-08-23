<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    
    public static function getData($id, $field){
        $value = DB::table('patients')
                ->select($field)
                ->where('id', $id)
                ->first();
        return $value->$field;
    }
    public static function getPatientName($id){
        $value = DB::table('patients')
                ->select('patient_name')
                ->where('id', $id)
                ->first();
        return $value->patient_name;
    }
}
