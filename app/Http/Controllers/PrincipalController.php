<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PrincipalController extends Controller
{
    public function home(){
		//$eu = ['nome' => 'Ok, um nome aqui', 'idade' => 23];
		//return view('sobre', compact('eu'));
		
		return view('home');
	}
}
