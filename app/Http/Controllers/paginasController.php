<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paginasController extends Controller
{
    //
    public function inicio()
    {
    	return view ('inicio');
    }

    public function quienesSomos()
    {
    	return view ('quienesSomos');
    }
    public function dondeEstamos(){
    	return view ('dondeEstamos');
    }

}
