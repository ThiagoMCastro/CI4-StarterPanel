<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Authorization implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $role = session()->get('role');

        // se não estiver logado
        if (!$role) {
            return redirect()->to(base_url('/'));
        }

        // $arguments pode ser a role mínima exigida para acessar
        // Exemplo: ['admin'] ou ['2','3']
        if ($arguments) {
            $allowedRoles = $arguments;
            if (!in_array($role, $allowedRoles)) {
                return redirect()->to(base_url('forbidden'));
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // não precisamos fazer nada aqui
    }
}
