<?php

namespace App\Controllers;

use App\Models\ApplicationModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

abstract class BaseController extends Controller
{
    protected $helpers = ['cookie', 'date', 'security'];

    protected $session, $segment, $validation, $encrypter, $ApplicationModel, $data = [];

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        $this->session = service('session');
        $this->segment = service('uri');
        $this->validation = \Config\Services::validation();
        $this->encrypter = \Config\Services::encrypter();
        $this->ApplicationModel = new ApplicationModel();

        // Pega o usuário logado pelo username
        $user = $this->ApplicationModel->getUser(username: $this->session->get('username'));

        // Segmentos da URL
        $segment = ($this->segment->getTotalSegments() >= 1) ? $this->segment->getSegment(1) : '';
        $subsegment = ($this->segment->getTotalSegments() >= 2) ? $this->segment->getSegment(2) : '';


        // Definindo menus estáticos
        $staticMenu = [
            ['title' => 'Dashboard', 'url' => 'dashboard', 'icon' => 'home', 'children' => []],
            ['title' => 'Users', 'url' => 'users', 'icon' => 'users', 'children' => []],
            ['title' => 'Settings', 'url' => 'settings', 'icon' => 'settings', 'children' => []]
        ];

        $this->data = [
            'segment' => $segment,
            'subsegment' => $subsegment,
            'user' => $user,
            'menu' => $staticMenu
        ];
    }
}
