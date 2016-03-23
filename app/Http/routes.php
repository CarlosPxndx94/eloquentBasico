<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use EloquentBasico\User;

Route::get('/create', function () {
    $user = User::create([
    		'name' => 'Carlos Balcazar',
    		'email' => 'carlossolorock@gmail.com',
    		'password' => bcrypt('123456'),
    		'gender' => 'm',
    		'biography' => 'Aprendiz de laravel'
    	]);

    return 'Usuario creado';
});

Route::get('/update', function () {

    $user = User::find(1);

    $user->gender = 'm';
    $user->biography = 'Aprendiz Laravel';

    $user->save();

    return 'Usuario Actualizado';
});
