<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemPedidoModel extends Model
{
    protected $table            = 'itens_pedido';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'id_pedido',
        'id_produto',
        'quantidade',
        'valor_unitario',
        // 'valor_total' é calculado no banco, não precisa ser alterado diretamente
        'comprimento_mm',
        'largura_mm',
        'altura_mm',
        'peso_kg',
        'volume'
    ];

    protected $useTimestamps = false;
    protected $returnType    = 'array';

    // 🔗 Função para buscar itens de um pedido com os dados do produto
    public function getItensComProduto($id_pedido)
    {
        return $this->select('itens_pedido.*, produtos.codigo, produtos.descricao')
                    ->join('produtos', 'produtos.id = itens_pedido.id_produto', 'left')
                    ->where('id_pedido', $id_pedido)
                    ->findAll();
    }
}
