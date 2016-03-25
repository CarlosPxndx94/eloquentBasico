<?php

namespace EloquentBasico\Http\Controllers;

use Illuminate\Http\Request;

use EloquentBasico\User;

use EloquentBasico\Http\Requests;
use EloquentBasico\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home(){
    	$users = User::orderBy('id', 'DESC')
    			->take(10)
    			->get();
    	return view('pages.home', compact('users'));
    }
}
