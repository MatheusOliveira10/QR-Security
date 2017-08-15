<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frequencia extends Model
{
    public function alunos()
    {
        return $this->belongsTo('App\Aluno');
    }
}
