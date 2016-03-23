<?php

namespace EloquentBasico\Http\Controllers;

use Illuminate\Http\Request;

use EloquentBasico\Http\Requests;
use EloquentBasico\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home(){
    	return view('pages.home');
    }
}
