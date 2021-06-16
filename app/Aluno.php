<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    //
    public function carta(){
        return $this->belongsTo('App\Carta');
    }
    
    public function turma(){
        return $this->belongsTo('App\Turma');
    }
}
