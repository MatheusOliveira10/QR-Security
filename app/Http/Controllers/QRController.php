<?php

namespace App\Http\Controllers;

use App\QR;
use App\Aluno;
use App\Dia;

use Illuminate\Http\Request;

class QRController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aluno = Aluno::all();
        $dias = Dia::all();
        return view('QR.index', compact('aluno', 'dias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $qr = new QR();

        $qr->rm = $request->rm;

        $qr->save();

        $qr->alunos()->sync($request->rm, false);
        Session::flash('success', 'Aluno entrou com sucesso!');

        return redirect('qr.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QR  $qR
     * @return \Illuminate\Http\Response
     */
    public function show(QR $qR)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QR  $qR
     * @return \Illuminate\Http\Response
     */
    public function edit(QR $qR)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QR  $qR
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QR $qR)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QR  $qR
     * @return \Illuminate\Http\Response
     */
    public function destroy(QR $qR)
    {
        //
    }
}
