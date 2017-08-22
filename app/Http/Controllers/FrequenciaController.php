<?php

namespace App\Http\Controllers;

use App\Frequencia;
use App\Aluno;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrequenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::all();

        return view('frequencia.index', compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frequencia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $frequencia = new Frequencia();

        $frequencia->aluno_id = $request->aluno_id;
        $frequencia->save();

        Session::flash('success', 'O Aluno entrou com sucesso!');

        return redirect()->route('frequencia.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Frequencia  $frequencia
     * @return \Illuminate\Http\Response
     */
    public function show(Frequencia $frequencia, $id)
    {
        $events = [];
        $aluno = Aluno::find($id); 
        $frequencias = Frequencia::all()->where('aluno_id', $aluno->id);
        foreach ($frequencias as $frequencia) { 
           $crudFieldValue = $frequencia->getOriginal('created_at'); 

           if (! $crudFieldValue) {
               continue;
           }

           $eventLabel     = $frequencia->nome; 
           $prefix         = $alunos->nome; 
           $suffix         = 'Entrou na escola'; 
           $dataFieldValue = trim($prefix . " " . $eventLabel . " " . $suffix); 
           $events[]       = [ 
                'title' => $dataFieldValue, 
                'start' => $crudFieldValue, 
                'url'   => route('frequencia.edit', $frequencia->id)
           ]; 
        } 



        return view('frequencia.show', compact('events'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Frequencia  $frequencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Frequencia $frequencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Frequencia  $frequencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Frequencia $frequencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Frequencia  $frequencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Frequencia $frequencia)
    {
        //
    }

    public function calendario(Frequencia $frequencia)
    {
        //
    }
}
