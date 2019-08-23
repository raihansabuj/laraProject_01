<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    public static function getActiveSymptom(){
        $value=DB::table('symptoms')
                    ->orderBy('id', 'asc')
                    ->where([['status', '=', '1'],])
                    ->get();
        return $value;
    }
    
    public static function getSymptomTitle($id){
        $value = DB::table('symptoms')
                ->select('title')
                ->where('id', $id)
                ->first();
        return $value->title;
    }

    public static function getData($id, $field){
        $value = DB::table('symptoms')
                ->select($field)
                ->where('id', $id)
                ->first();
        return $value->$field;
    }
    
}
 