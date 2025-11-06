<?php
$userRole = $user['role']; // ex: '3' = admin, '2' = vendedor, '1' = visualizador

$menus = [
    [
        'id' => 'home',
        'title' => 'Página Inicial',
        'icon' => 'home',
        'link' => '',
        'roles' => ['3','2','1']
    ],
    [
        'id' => 'clientes',
        'title' => 'Clientes',
        'icon' => 'users',
        'roles' => ['3','2','1'],
        'children' => [
            ['title' => 'Listar Clientes', 'link' => 'clientes/listar', 'roles' => ['3','2','1']],
            ['title' => 'Adicionar Cliente', 'link' => 'clientes/novo', 'roles' => ['3','2']]
        ]
    ],
    [
        'id' => 'produtos',
        'title' => 'Produtos',
        'icon' => 'package',
        'roles' => ['3','2'],
        'children' => [
            ['title' => 'Listar Produtos', 'link' => 'produtos/listar', 'roles' => ['3','2','1']],
            ['title' => 'Adicionar Produto', 'link' => 'produtos/novo', 'roles' => ['3']]
        ]
    ],
    [
        'id' => 'pedidos',
        'title' => 'Pedidos de Venda',
        'icon' => 'file-text',
        'roles' => ['3','2','1'],
        'children' => [
            ['title' => 'Listar Pedidos', 'link' => 'pedidos/listar', 'roles' => ['3','2','1']],
            ['title' => 'Novo Pedido', 'link' => 'pedidos/novo', 'roles' => ['3','2']],
            ['title' => 'Gerar PDF', 'link' => 'pedidos/pdf.html', 'roles' => ['3','2']]
        ]
    ],
    [
        'id' => 'relatorios',
        'title' => 'Relatórios',
        'icon' => 'bar-chart-2',
        'roles' => ['3','2','1'],
        'children' => [
            ['title' => 'Resumo de Vendas', 'link' => 'relatorios/vendas.html', 'roles' => ['3','2','1']],
            ['title' => 'Produtos Vendidos', 'link' => 'relatorios/produtos.html', 'roles' => ['3','2']]
        ]
    ],
    [
        'id' => 'config',
        'title' => 'Configurações',
        'icon' => 'settings',
        'roles' => ['3'],
        'children' => [
            ['title' => 'Usuários do Sistema', 'link' => 'users', 'roles' => ['3']],
        ]
    ]
];
function canView($itemRoles, $userRole) {
    return in_array($userRole, $itemRoles);
}
?>


<nav class="navbar navbar-vertical navbar-expand-lg">
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                <?php foreach ($menus as $menu): ?>
                    <?php if(!canView($menu['roles'], $userRole)) continue; ?>

                    <?php if(isset($menu['label'])): ?>
                        <li class="nav-item">
                            <p class="navbar-vertical-label"><?= $menu['label'] ?></p>
                            <hr class="navbar-vertical-line" />
                        </li>
                    <?php endif; ?>

                    <li class="nav-item">
                        <?php if(isset($menu['children'])): ?>
                            <div class="nav-item-wrapper">
                                <a class="nav-link dropdown-indicator label-1" href="#nv-<?= $menu['id'] ?>" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-<?= $menu['id'] ?>">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div>
                                        <span class="nav-link-icon"><span data-feather="<?= $menu['icon'] ?>"></span></span>
                                        <span class="nav-link-text"><?= $menu['title'] ?></span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-<?= $menu['id'] ?>">
                                        <li class="collapsed-nav-item-title d-none"><?= $menu['title'] ?></li>
                                        <?php foreach ($menu['children'] as $child): ?>
                                            <?php if(!canView($child['roles'], $userRole)) continue; ?>
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?= base_url('dashboard/')?><?= $child['link'] ?>">
                                                    <div class="d-flex align-items-center"><span class="nav-link-text"><?= $child['title'] ?></span></div>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        <?php else: ?>
                            <a class="nav-link label-1" href="<?= base_url('dashboard/')?><?= $menu['link'] ?>">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-icon"><span data-feather="<?= $menu['icon'] ?>"></span></span>
                                    <span class="nav-link-text"><?= $menu['title'] ?></span>
                                </div>
                            </a>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="navbar-vertical-footer">
        <button class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center">
            <span class="uil uil-left-arrow-to-left fs-8"></span>
            <span class="uil uil-arrow-from-right fs-8"></span>
            <span class="navbar-vertical-footer-text ms-2">Minimizar</span>
        </button>
    </div>
</nav>
