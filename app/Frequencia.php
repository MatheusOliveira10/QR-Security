<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frequencia extends Model
{
    public function aluno()
    {
        return $this->belongsTo('App\Aluno');
    }

    public function ocorrencia()
    {
        return $this->belongsTo('App\Ocorrencias');
    }
}
