<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    //
    public function professor(){
        return $this->belongsTo('App\Professor');
    }
}
