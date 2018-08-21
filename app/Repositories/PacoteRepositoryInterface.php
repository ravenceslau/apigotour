<?php

namespace App\Repositories;

interface PacoteRepositoryInterface
{
    public function bucarTodosPacotes();
    public function buscarPacote(int $id);
    public function buscarDetalhePacote(int $id);
    public function criarPacote(Request $request);
    public function editarPacote(int $id, Request $request);
    public function excluirPacote(int $id);
}