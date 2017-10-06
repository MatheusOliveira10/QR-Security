<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    public function sala()
    {
        return $this->belongsTo('App\Sala');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function frequencias()
    {
        return $this->hasMany('App\Frequencia');
    }

    public function saida()
    {
        return $this->hasMany('App\Saida');
    }
}
