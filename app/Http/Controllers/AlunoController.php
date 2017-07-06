<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sala;
use App\Aluno;
use App\Dia;
use Session;
use Carbon\Carbon;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salas = Sala::all();
        $alunos = Aluno::all();
        return view('alunos.index', compact('salas', 'alunos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('alunos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        $aluno = Aluno::find($id);
        $aluno->dias()->sync($request->id, false);
        Session::flash('success', 'Aluno entrou com sucesso!');

        return redirect('alunos.show', $aluno->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aluno = Aluno::find($id);
        return view('alunos.show', compact('aluno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aluno = Aluno::find($id);
        $dias = Dia::all();
        $dias2 = array();
        foreach ($dias as $dia) {
            $dias2[$dia->id] = $dia->aula;
        }

        return view('alunos.edit')->withAluno($aluno)->withDias($dias2);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
                 // Validate the data
        $aluno = Aluno::find($id);
        
        // Save the data to the database
        $aluno->nome = $request->nome;
        $aluno->sala_id = $request->sala_id;
        $aluno->save();   
        
        $aluno->dias()->attach($request->dias);
             
        // set flash data with success message
        Session::flash('success', 'O aluno entrou com sucesso!');
        // redirect with flash data to posts.show
        return redirect()->route('alunos.show', $aluno->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
