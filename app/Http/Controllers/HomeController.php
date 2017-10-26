<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Frequencia;
use App\Aluno;
use App\Saida;
use \Carbon\Carbon;
use Auth;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::all()->where('user_id', Auth::id());
        $user = Auth::user();
        $nome = $user->name;
        
        $events = [];
        $events2 = [];
        $alunos = Aluno::all()->where('user_id', Auth::id());
        foreach($alunos as $aluno)
        {
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
                'url'   => route('frequencia.show', $frequencia->id)
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
                'url'   => route('saida.show', $saida->id)
           ]; 
        }
        } 

        
            foreach($alunos as $aluno)
            {        
                $dias = Frequencia::all()->where('aluno_id', $aluno->id)->count();
                $alunosdia = Frequencia::all()->where('created_at', '>=', date('Y-m-d'))->count();
                $carteirinha = Frequencia::all()->where('ocorrencia_id', 2)->count();
                $uniforme = Frequencia::all()->where('ocorrencia_id', 3)->count();
                $atraso = Frequencia::all()->where('ocorrencia_id', 4)->count();
                $caruni = Frequencia::all()->where('ocorrencia_id', 5)->count();
                $caratr = Frequencia::all()->where('ocorrencia_id', 6)->count();
                $uniatr = Frequencia::all()->where('ocorrencia_id', 7)->count();
            }
        
        return view('index', compact('alunos', 'dias', 'nome', 'alunosdia', 'carteirinha', 'uniforme', 'atraso', 'caruni', 'caratr', 'uniatr', 'events', 'events2'));
    }
}
