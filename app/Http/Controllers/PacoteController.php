<?php

namespace App\Http\Controllers;

use App\Models\Pacote;
use App\Repositories\PacoteRepositoryInterface;

class PacoteController extends Controller
{
    /**
     * Create a new controller instance.
     * 
     * @return void
     */

    private $pacoteRepository;

    public function __construct(PacoteRepositoryInterface $pacoteRepository)
    {
        $this->pacoteRepository = $pacoteRepository;
    }

    public function buscarTodosPacotes()
    {
        return $this->pacoteRepository->buscarTodosPacotes();
    }

}