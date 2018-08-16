<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class Pacote extends Model
{
    protected $table = 'pacote';

    //Define os campos da tabele que podem ser preenchidos no banco de dados
    protected $fillable = [
        'nome', 'valor', 'dataInicio', 'dataFim', 'descricao', 'urlImagem', 'site', 'telefone'
    ];

    protected $casts = [
        'dataInicio' => 'Timestamp',
        'dataFim' => 'Timestamp'
    ];

    public $timestamps = false;
}
