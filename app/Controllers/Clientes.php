<?php

namespace App\Controllers;

use App\Models\ClienteModel;
use CodeIgniter\Controller;

class Clientes extends BaseController
{
    protected $clienteModel;

    public function __construct()
    {
        $this->clienteModel = new ClienteModel();
        helper(['form', 'url']);
    }

    // ==============================
    // NOVO CLIENTE
    // ==============================
    public function novo()
    {
        if ($this->request->getMethod() === 'post') {
            $dados = [
                'razao_social' => $this->request->getPost('razao_social'),
                'cpf_cnpj'     => $this->request->getPost('cpf_cnpj'),
                'telefone'     => $this->request->getPost('telefone'),
                'email'        => $this->request->getPost('email'),
                'contato_nome' => $this->request->getPost('contato_nome'),
                'endereco'     => $this->request->getPost('endereco'),
                'cidade'       => $this->request->getPost('cidade'),
                'estado'       => $this->request->getPost('estado'),
                'cep'          => $this->request->getPost('cep'),
            ];

            if (empty($dados['razao_social']) || empty($dados['cpf_cnpj'])) {
                return redirect()->back()->withInput()->with('erro', 'Razão Social e CPF/CNPJ são obrigatórios!');
            }

            $this->clienteModel->insert($dados);
            return redirect()->to(base_url('clientes'))->with('sucesso', 'Cliente cadastrado com sucesso!');
        }
    }

    // ==============================
    // EDITAR CLIENTE
    // ==============================
    public function editar($id = null)
    {
        $cliente = $this->clienteModel->find($id);

        if (!$cliente) {
            return redirect()->to(base_url('clientes'))->with('erro', 'Cliente não encontrado!');
        }

        if ($this->request->getMethod() === 'post') {
            $dados = [
                'razao_social' => $this->request->getPost('razao_social'),
                'cpf_cnpj'     => $this->request->getPost('cpf_cnpj'),
                'telefone'     => $this->request->getPost('telefone'),
                'email'        => $this->request->getPost('email'),
                'contato_nome' => $this->request->getPost('contato_nome'),
                'endereco'     => $this->request->getPost('endereco'),
                'cidade'       => $this->request->getPost('cidade'),
                'estado'       => $this->request->getPost('estado'),
                'cep'          => $this->request->getPost('cep'),
            ];

            $this->clienteModel->update($id, $dados);
            return redirect()->to(base_url('clientes'))->with('sucesso', 'Cliente atualizado com sucesso!');
        }
    }

    // ==============================
    // EXCLUIR CLIENTE
    // ==============================
    public function excluir($id = null)
    {
        $cliente = $this->clienteModel->find($id);

        if (!$cliente) {
            return redirect()->to(base_url('clientes'))->with('erro', 'Cliente não encontrado!');
        }

        $this->clienteModel->delete($id);
        return redirect()->to(base_url('clientes'))->with('sucesso', 'Cliente removido com sucesso!');
    }

    // ==============================
    // DETALHES DO CLIENTE
    // ==============================
    public function visualizar($id = null)
    {
        $cliente = $this->clienteModel->find($id);

        if (!$cliente) {
            return redirect()->to(base_url('clientes'))->with('erro', 'Cliente não encontrado!');
        }
    }
}
