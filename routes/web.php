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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio',function(){
    return 'hello';
});

Route::get('/name/{name?}/last/{last?}', function($name = null,$last = null){
    return 'el nombre es '.$name.' '.$last;
});

Route::get('/name/{name}', function($name){
    return 'el nombre es '.$name;
});

Route::get('prueva/{name}', 'PruevaController@prueva');

//referencia a controller del mismo tipo
Route::resource('trainers', 'TrainerController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('pokemons', 'PokemonController');