<?php

namespace App\Models;

class ValidacaoPacote
{
    public const MENSAGENS_DE_ERRO = [
        'required'    => 'O campo :attribute é obrigatório',
        'numeric'     => 'O valor do campo deve ser numérico',
        'date_format' => 'O formato da data deve ser no padrão americano Y-m-d',
        'max'         => 'O :attribute deve ser no máximo :max caracteres'   
    ];

    public const REGRA_NOVO_PACOTE = [
        'nome'       => 'required | max:80',
        'valor'      => 'required | numeric',
        'dataInicio' => 'required | date_format:"Y-m-d"',
        'dataFim'    => 'required | date_format:"Y-m-d"',
        'descricao'  => 'required' 
    ];

}