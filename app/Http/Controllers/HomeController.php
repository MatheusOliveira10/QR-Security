<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Frequencia;
use App\Aluno;
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
        
        return view('index', compact('alunos', 'dias', 'nome', 'alunosdia', 'carteirinha', 'uniforme', 'atraso', 'caruni', 'caratr', 'uniatr'));
    }
}
