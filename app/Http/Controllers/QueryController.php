<?php

namespace EloquentBasico\Http\Controllers;

use EloquentBasico\User;

use Illuminate\Http\Request;

use EloquentBasico\Http\Requests;
use EloquentBasico\Http\Controllers\Controller;

class QueryController extends Controller
{
    public function eloquentAll(){
    	$users = User::all();
    	$title = 'Todos los usuarios (All)';
    	return view('query.method', compact('title','users'));    	
    }

    public function eloquentGet($gender){
    	$users = User::where('gender', $gender)
    			->get();
    	$title = 'Lista de Usuarios (GET)';
    	return view('query.method', compact('title','users'));    			
    }

    public function eloquentGetCustom(){
    	$users = User::where('gender', 'f')
    			->get(['id', 'name', 'biography']);
    	$title = 'Lista de Usuarios (GET Custom - con Array)';
    	return view('query.method', compact('title','users'));    			
    }

    public function eloquentDelete($id){
        $users = User::find($id);
        $users->delete();
        return view('pages.delete');              
    }

    public function eloquentList(){
        $users = User::orderBy('name', 'ASC')
                ->lists('name', 'id');
        return view('query.list', compact('users'));
    }
}
