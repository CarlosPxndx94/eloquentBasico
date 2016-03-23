<?php

namespace EloquentBasico\Http\Controllers;

use EloquentBasico\User;

use Illuminate\Http\Request;

use EloquentBasico\Http\Requests;
use EloquentBasico\Http\Controllers\Controller;

class QueryController extends Controller
{
    public function getAll(){
    	$users = User::all();
    	return view('query.all', compact('users'));    	
    }
}
