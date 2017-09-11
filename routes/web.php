<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/phpinfo', function () {
    echo phpinfo();
    return;
});

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/alunos/chamada', 'AlunoController@chamadapagina')->name('alunos.chamadapagina');
Route::put('/alunos/{id}', ['uses' => 'AlunoController@chamada', 'as' =>'alunos.chamada']);

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@Login')->name('admin.login.submit');
});

Route::prefix('alunos')->group(function() {
    Route::post('/', ['uses' => 'AlunoController@store', 'as' => 'alunos.store'])->middleware('auth:admin');
    Route::get('/{id}/edit', ['uses' => 'AlunoController@edit', 'as' => 'alunos.edit'])->middleware('auth:admin');
    Route::put('/{id}', ['uses' => 'AlunoController@update', 'as' => 'alunos.update'])->middleware('auth:admin');
    Route::delete('/{id}', ['uses' => 'AlunoController@destroy', 'as' => 'alunos.destroy'])->middleware('auth:admin');
    Route::get('/', 'AlunoController@index')->name('alunos.index');
    Route::get('/create', 'AlunoController@create')->name('alunos.create');
});

Route::prefix('frequencia')->group(function() {
    Route::post('/', ['uses' => 'FrequenciaController@store', 'as' => 'frequencia.store'])->middleware('auth:admin');
    Route::get('/{id}/edit', ['uses' => 'FrequenciaController@edit', 'as' => 'frequencia.edit']);
    Route::put('/{id}', ['uses' => 'FrequenciaController@update', 'as' => 'frequencia.update']);
    Route::delete('/{id}', ['uses' => 'FrequenciaController@destroy', 'as' => 'frequencia.destroy']);
    Route::get('/', ['uses' => 'FrequenciaController@show', 'as' => 'frequencia.show'])->middleware('auth');
    Route::get('/calendar', 'FrequenciaController@calendario')->middleware('auth');
    Route::get('/', 'FrequenciaController@index')->name('frequencia.index');
    Route::get('/create', 'FrequenciaController@create')->name('frequencia.create');

});

Route::prefix('saida')->group(function() {
    Route::get('/', ['uses' => 'SaidaController@index', 'as' => 'saida.index'])->middleware('auth:admin');
    Route::post('/{id}', ['uses' => 'SaidaController@store', 'as' => 'saida.store'])->middleware('auth:admin');
    Route::get('/{id}/edit', ['uses' => 'SaidaController@edit', 'as' => 'saida.edit']);
    Route::put('/{id}', ['uses' => 'SaidaController@update', 'as' => 'saida.update']);
    Route::delete('/{id}', ['uses' => 'SaidaController@destroy', 'as' => 'saida.destroy']);
    Route::get('/', ['uses' => 'SaidaController@show', 'as' => 'saida.show'])->middleware('auth');
    Route::get('/fetch/{id}', ['uses' => 'SaidaController@fetch', 'as' => 'saida.fetch']);
    Route::post('/post', ['uses' => 'SaidaController@post', 'as' => 'saida.post']);
    Route::get('/create', 'SaidaController@create')->name('saida.create');
});