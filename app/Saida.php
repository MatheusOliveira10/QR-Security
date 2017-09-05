<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saida extends Model
{
    protected $fillable = ['aluno_id', 'created_at', 'updated_at'];
    public function alunos()
    {
        return $this->belongsTo('App\Aluno');
    }
}
