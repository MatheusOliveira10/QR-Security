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
        $aluno = Aluno::all()->where('user_id', Auth::id())->first();
        $dias = Frequencia::all()->where('aluno_id', $aluno->id)->count();
        $user = Auth::user();
        $nome = $user->name;

        
        return view('index', compact('aluno', 'dias', 'nome'));
    }
}
