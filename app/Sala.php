<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    public function alunos()
    {
        return $this->hasMany('App\Aluno');
    }
}
