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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/frequencia/calendar', 'FrequenciaController@calendario')->middleware('auth');
Route::get('/alunos/chamada', 'AlunoController@chamadapagina')->name('alunos.chamadapagina');
Route::put('/alunos/{id}', ['uses' => 'AlunoController@chamada', 'as' =>'alunos.chamada']);

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@Login')->name('admin.login.submit');
});

Route::resource('qr', 'QRController');
Route::resource('alunos', 'AlunoController');
Route::resource('dias', 'DiaController');
Route::resource('frequencia', 'FrequenciaController');
Route::resource('saida', 'SaidaController');
