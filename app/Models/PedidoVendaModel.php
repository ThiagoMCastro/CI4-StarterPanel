<?php

namespace App\Models;

use CodeIgniter\Model;

class PedidoVendaModel extends Model
{
    protected $table            = 'pedidos_venda';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'numero',
        'id_cliente',
        'data_emissao',
        'previsao_entrega',
        'prazo_entrega',
        'proposta',
        'ph',
        'explosivo',
        'viscosidade',
        'densidade',
        'temperatura',
        'observacoes',
        'forma_pagamento',
        'contato',
        'total',
        'criado_em'
    ];

    protected $useTimestamps = false;
    protected $returnType    = 'array';

    // 🔗 Função para obter o cliente vinculado
    public function getCliente()
    {
        return $this->select('pedidos_venda.*, clientes.razao_social')
                    ->join('clientes', 'clientes.id = pedidos_venda.id_cliente', 'left');
    }
}
