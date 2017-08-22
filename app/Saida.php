<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saida extends Model
{
    public function alunos()
    {
        return $this->belongsTo('App\Aluno');
    }
}
