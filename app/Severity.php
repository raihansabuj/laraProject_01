<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Severity extends Model
{
    public function symptom()
    {
        return $this->belongsTo(Symptom::class);
    }
}
