<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QR extends Model
{
    public function alunos()
    {
        return $this->hasMany('App\Aluno');
    }
}
