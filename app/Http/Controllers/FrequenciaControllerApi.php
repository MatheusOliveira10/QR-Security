<?php

namespace App\Http\Controllers;

use App\Frequencia;
use App\Saida;
use App\Aluno;
use App\User;
use Auth;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Notifications\Attention;

class FrequenciaControllerApi extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function marcarlida()
    {
        auth()->user()->unreadNotifications->markAsRead();
    }
    public function index()
    {
        $alunos = Aluno::all()->where('user_id', Auth::id());
        $dias = Frequencia::all()->where('aluno_id', $aluno->id);

        return view('frequencia.index', compact('alunos', 'dias'));
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
        $teste = Frequencia::all()
                        ->where('created_at', '>=', date('Y-m-d'))
                        ->where('aluno_id', $request->aluno_id)
                        ->count();




        if($teste < 1)
        {                
        
        $aluno = Aluno::find($request->aluno_id);
        $find = User::find($aluno->user_id);

        $frequencia = new Frequencia();

        $frequencia->aluno_id = $request->aluno_id;
        $frequencia->ocorrencia_id = $request->ocorrencia_id;
        $frequencia->created_at = $request->created_at;
        $frequencia->save();

        $find->notify(new Attention($frequencia));        

        return $frequencia;

        }else{
            return "O Aluno já entrou!";
        }

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
        $events2 = [];
        $aluno = Aluno::find($id); 
        $frequencias = Frequencia::all()->where('aluno_id', $aluno->id);
        $saidas = Saida::all()->where('aluno_id', $aluno->id);
        foreach ($frequencias as $frequencia) { 
           $crudFieldValue = $frequencia->getOriginal('created_at'); 

           if (! $crudFieldValue) {
               continue;
           }

           $eventLabel     = $frequencia->nome; 
           $prefix         = $aluno->nome; 
           $suffix         = 'Entrou na escola'; 
           $dataFieldValue = trim($prefix . " " . $eventLabel . " " . $suffix); 
           $events[]       = [ 
                'title' => $dataFieldValue, 
                'start' => $crudFieldValue, 
                'url'   => route('frequencia.edit', $frequencia->id)
           ]; 
        } 

        foreach ($saidas as $saida) { 
           $crudFieldValue = $saida->getOriginal('created_at'); 

           if (! $crudFieldValue) {
               continue;
           }

           $eventLabel     = $saida->nome; 
           $prefix         = $aluno->nome; 
           $suffix         = 'Saiu da escola'; 
           $dataFieldValue = trim($prefix . " " . $eventLabel . " " . $suffix); 
           $events2[]       = [ 
                'title' => $dataFieldValue, 
                'start' => $crudFieldValue, 
                'url'   => route('saida.edit', $saida->id)
           ]; 
        } 



        return view('frequencia.show', compact('events', 'aluno', 'events2'));

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
        $events = [];
        $events2 = [];
        $aluno = Aluno::all()->where('user_id', Auth::id())->first();
        $frequencias = Frequencia::all()->where('aluno_id', $aluno->id);
        $saidas = Saida::all()->where('aluno_id', $aluno->id);
        foreach ($frequencias as $frequencia) { 
           $crudFieldValue = $frequencia->getOriginal('created_at'); 

           if (! $crudFieldValue) {
               continue;
           }

           $eventLabel     = $frequencia->nome; 
           $prefix         = $aluno->nome; 
           $suffix         = 'Entrou na escola'; 
           $dataFieldValue = trim($prefix . " " . $eventLabel . " " . $suffix); 
           $events[]       = [ 
                'title' => $dataFieldValue, 
                'start' => $crudFieldValue, 
                'url'   => route('frequencia.edit', $frequencia->id)
           ]; 
        } 

        foreach ($saidas as $saida) { 
           $crudFieldValue = $saida->getOriginal('created_at'); 

           if (! $crudFieldValue) {
               continue;
           }

           $eventLabel     = $saida->nome; 
           $prefix         = $aluno->nome; 
           $suffix         = 'Saiu da escola'; 
           $dataFieldValue = trim($prefix . " " . $eventLabel . " " . $suffix); 
           $events2[]       = [ 
                'title' => $dataFieldValue, 
                'start' => $crudFieldValue, 
                'url'   => route('saida.edit', $saida->id)
           ]; 
        } 



        return view('frequencia.show', compact('events', 'aluno', 'events2'));

    }

    public function count()
    {
        $id = Auth::guard();
        dd ($id);
        $user = User::find($id);
        $count = $user->unreadNotifications;
        return $count;
    }
}    
