<?php

namespace App\Models;

use CodeIgniter\Model;

class FreteModel extends Model
{
    protected $table            = 'fretes';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'id_pedido',
        'valor',
        'transportadora',
        'observacoes'
    ];

    protected $useTimestamps = false;
    protected $returnType    = 'array';
}
