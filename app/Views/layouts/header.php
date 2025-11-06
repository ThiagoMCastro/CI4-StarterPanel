<?php
$notifications = [
    ['text' => 'Sistema em desenvolvimento.', 'link' => '#']
];

// Atalhos dos 9 pontos
$quickLinks = [
    [
        'title' => 'Correios',
        'link'  => 'https://rastreamento.correios.com.br/app/index.php',
        'img'   => 'https://logodownload.org/wp-content/uploads/2014/05/correios-logo-1-1.png'
    ],
    [
        'title' => 'Rodonaves',
        'link'  => 'https://rodonaves.com.br/rastreio-de-mercadoria',
        'img'   => 'https://rodonaves.com.br/content/dam/rodonaves/SiteHeader-400x117-1E.gif'
    ],
];
?>

<nav class="navbar navbar-top fixed-top navbar-expand" id="navbarDefault">
    <div class="collapse navbar-collapse justify-content-between">
        <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse"
                    aria-expanded="false" aria-label="Toggle Navigation">
                <span class="navbar-toggle-icon"><span class="toggle-line"></span></span>
            </button>
            <a class="navbar-brand me-1 me-sm-3" href="index.html">
                <div class="d-flex align-items-center">
                    <img src="<?= base_url('')?>assets/img/icons/logo.png" alt="logo" width="100px"/>
                </div>
            </a>
        </div>

        <ul class="navbar-nav navbar-nav-icons flex-row">

            <!-- Notificações -->
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" style="min-width: 2.25rem" role="button" data-bs-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside">
                    <span class="d-block" style="height:20px;width:20px;"><span data-feather="bell" style="height:20px;width:20px;"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret">
                    <div class="card position-relative border-0">
                        <div class="card-header py-3 px-2 d-flex justify-content-between">
                            <h5 class="text-body-emphasis mb-0">Notificações</h5>
                            <button class="btn btn-link p-0 fs-9 fw-normal" type="button">Marcar como lidas</button>
                        </div>
                        <div class="card-body p-0">
                            <?php foreach ($notifications as $notif): ?>
                                <h6 class="fw-light py-4 text-center"><?= $notif['text'] ?></h6>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </li>

            <!-- Quick Links 9 pontos -->
            <li class="nav-item dropdown">
                <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown"
                   aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false">
                    <svg width="16" height="16" viewbox="0 0 16 16" fill="none">
                        <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                        <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                        <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                        <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                        <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                        <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                        <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                        <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                        <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                    </svg>
                </a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border">
                    <div class="card bg-body-emphasis position-relative border-0">
                        <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                            <div class="row text-center align-items-center gx-0 gy-0">
                                <?php foreach ($quickLinks as $link): ?>
                                    <div class="col-4">
                                        <a target="_blank" class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3"
                                           href="<?= $link['link'] ?>">
                                            <img src="<?= $link['img'] ?>" alt="" width="30"/>
                                            <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1"><?= $link['title'] ?></p>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <!-- Perfil do usuário -->
            <li class="nav-item dropdown">
                <a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button"
                   data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-l">
                        <img class="rounded-circle" src="<?= $user['avatar'] ?>" alt="Avatar"/>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border">
                    <div class="card position-relative border-0">
                        <div class="card-body p-0">
                            <div class="text-center pt-4 pb-3">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="<?= $user['avatar'] ?>" alt="Avatar"/>
                                </div>
                                <h6 class="mt-2 text-body-emphasis"><?= $user['fullname'] ?></h6>
                            </div>
                        </div>
                        <div class="overflow-auto scrollbar" style="height: 10rem;">
                            <ul class="nav d-flex flex-column mb-2 pb-1">
                                <li class="nav-item"><a class="nav-link px-3 d-block" href="<?= base_url('dashboard/')?>user/profile"><span class="me-2 text-body align-bottom" data-feather="user"></span>Minha conta</a></li>
                                <li class="nav-item"><a class="nav-link px-3 d-block" href="<?= base_url('dashboard/')?>settings"><span class="me-2 text-body align-bottom" data-feather="settings"></span>Configurações</a></li>
                            </ul>
                        </div>
                        <div class="card-footer p-0 border-top border-translucent">
                            <div class="px-3 my-3">
                                <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="<?= base_url('dashboard/')?>logout"><span class="me-2" data-feather="log-out"></span>Desconectar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</nav>
