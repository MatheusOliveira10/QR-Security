<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ocorrencia extends Model
{
    public function frequencias()
    {
        return $this->hasMany('App\Frequencia');
    }
}
