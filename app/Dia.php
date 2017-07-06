<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dia extends Model
{
    public function alunos()
    {
        return $this->belongsToMany('App\Aluno');
    }
}
