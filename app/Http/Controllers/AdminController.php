<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use App\User;
use App\Ocorrencias;
use App\Frequencia;
use Auth;
use Image;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunosdia = Frequencia::all()->where('created_at', '>=', date('Y-m-d'))->count();
        $ocorrencias = Frequencia::all()->where('ocorrencia_id', '>', 1)->where('created_at', '>=', date('Y-m-d'))->count();        
        $ultimos = Frequencia::with(['aluno'])->where('created_at', '>=', date('Y-m-d'))->take(5)->get();

        return view('indexadmin', compact('ultimos', 'alunosdia', 'ocorrencias'));
    }

    public function perfil()
    {
        return view('perfiladmin', array('user' => Auth::user()) );
    }

    public function avatar(Request $request)
    {
        if($request->hasFile('avatar'))
        {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize('300', '300')->save( public_path('uploads/avatars/' . $filename) );
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('perfiladmin', array('user' => Auth::user()) );
    }
}
