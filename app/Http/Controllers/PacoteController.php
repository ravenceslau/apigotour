<?php

namespace App\Http\Controllers;

use App\Models\Pacote;

class PacoteController extends Controller
{
    /**
     * Create a new controller instance.
     * 
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function buscarPacotes()
    {
        $pacote = new Pacote();
        return $pacote->all();
    }

}