<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/role',[App\Http\Controllers\RoleController::class, 'addform']);
Route::post('/role/add',[App\Http\Controllers\RoleController::class, 'storerole']);


Route::get('/hello', function(){
    $team = ['Atik','Mostafiz','Rabbany'];
    return view('hello',compact('team'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
