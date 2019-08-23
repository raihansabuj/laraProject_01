<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
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
    //DB::raw('IFNULL( downloads.is_download, 0) as is_download')

    public static function getMAXSerial($year) {
        $value = DB::table('patients')
                //->select('IFNULL(code_sl, 0) AS max_serial')
                ->select( DB::Raw('IFNULL(MAX(`patients`.`code_sl`), 0) AS max_serial'))
                ->where('year', (int) $year)
                ->first();
        $MaxSL = ($value->max_serial) + 1;
        return $MaxSL;
    }
}
