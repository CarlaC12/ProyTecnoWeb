<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('pagina');
})->middleware('auth');


/*Route::get('/', function () {
    return view('auth.login');
});*/

//Route::view('dashboard', 'pagina')->name('dashboard')->middleware('auth');
Route::view('login', 'auth.login')->name('login');

Route::post('login', function(){
    $credencial=  request()->only('email', 'password');
    if (Auth::attempt($credencial)){
        request()->session()->regenerate();
        return redirect('/');
    }
    return redirect()->route('login');
});

Route::resource('periodo',PeriodoController::class)->names('periodo');

Route::resource('user',UserController::class)->names('user');
