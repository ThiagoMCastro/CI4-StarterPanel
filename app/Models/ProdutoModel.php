<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutoModel extends Model
{
    protected $table            = 'produtos';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'codigo',
        'descricao',
        'material',
        'tensao',
        'cv',
        'unidade',
        'preco',
        'criado_em'
    ];

    protected $useTimestamps = false;
    protected $returnType    = 'array';
}
