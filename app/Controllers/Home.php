<?php

namespace App\Controllers;
use CodeIgniter\Exceptions\PageNotFoundException;

class Home extends BaseController
{
    public function index(): string
    {
        $data = array_merge($this->data, [
            'title'         => 'Dashboard Page'
        ]);
        return view('pages/commons/dashboard', $data);
    }

    public function view(...$segments): string
    {
        $pagePath = empty($segments) ? 'index' : implode('/', $segments);
        $path = APPPATH . 'Views/pages/commons/' . $pagePath.'.php';
        // Verifica se o arquivo da view existe
        if (!is_file($path)) {
            throw new PageNotFoundException($pagePath);
        }

        // Gera um título automático
        $title = ucwords(str_replace('/', ' › ', $pagePath));

        $data = array_merge($this->data ?? [], [
            'title' => $title,
        ]);

        // Retorna a view correspondente
        return view('pages/commons/' . $pagePath, $data);
    }
}
