<?php

namespace App\Http\Controllers;

use App\Saida;
use Illuminate\Http\Request;

class SaidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('saida.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $saida = new Saida();

        $saida->aluno_id = $request->aluno_id;
        $saida->save();

        Session::flash('success', 'O Aluno saiu com sucesso!');

        return redirect()->route('saida.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Saida  $saida
     * @return \Illuminate\Http\Response
     */
    public function show(Saida $saida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Saida  $saida
     * @return \Illuminate\Http\Response
     */
    public function edit(Saida $saida)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Saida  $saida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Saida $saida)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Saida  $saida
     * @return \Illuminate\Http\Response
     */
    public function destroy(Saida $saida)
    {
        //
    }
}
