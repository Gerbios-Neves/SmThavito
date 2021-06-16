<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    //
    protected $table = 'pagamentos';

    public function aluno(){
        return $this->belongsTo('App\Aluno');
    }
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
