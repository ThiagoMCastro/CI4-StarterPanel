<!DOCTYPE html>
<html lang="pt-BR" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Phoenix</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="vendors/simplebar/simplebar.min.js"></script>
    <script src="assets/js/config.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/icons/line.css">
    <link href="assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <script>
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
    </script>
</head>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container-fluid bg-body-tertiary dark__bg-gray-1200">
    <div class="bg-holder bg-auth-card-overlay"
        style="background-image:url(<?= base_url() ?>assets/img/bg/37.png);">
    </div>
    <div class="row flex-center position-relative min-vh-100 g-0 py-5">
        <div class="col-11 col-sm-10 col-xl-8">
            <div class="card border border-translucent auth-card">
                <div class="card-body pe-md-0">
                    <div class="row align-items-center gx-0 gy-7">
                        <div
                            class="col-auto bg-body-highlight dark__bg-gray-1100 rounded-3 position-relative overflow-hidden auth-title-box">
                            <div class="bg-holder"
                                style="background-image:url(<?= base_url() ?>assets/img/bg/38.png);">
                            </div>
                            <div
                                class="position-relative px-4 px-lg-7 pt-7 pb-7 pb-sm-5 text-center text-md-start pb-lg-7 pb-md-7">
                                <h3 class="mb-3 text-body-emphasis fs-7">MixForce Access</h3>
                                <p class="text-body-tertiary">Acesse seu painel de gestão comercial de forma ágil e segura.</p>
                                <ul class="list-unstyled mb-0 w-max-content w-md-auto">
                                    <li class="d-flex align-items-center"><span
                                            class="uil uil-check-circle text-danger me-2"></span><span
                                            class="text-body-tertiary fw-semibold">Rápido</span></li>
                                    <li class="d-flex align-items-center"><span
                                            class="uil uil-check-circle text-danger me-2"></span><span
                                            class="text-body-tertiary fw-semibold">Simples</span></li>
                                    <li class="d-flex align-items-center"><span
                                            class="uil uil-check-circle text-danger me-2"></span><span
                                            class="text-body-tertiary fw-semibold">Responsivo</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col mx-auto">
                            <form action="<?= base_url('login'); ?>" method="POST">
                            <div class="auth-form-box">
                                <div class="text-center mb-7"><a
                                        class="d-flex flex-center text-decoration-none mb-4"
                                        href="<?= base_url() ?>index.html">
                                        <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block">
                                            <img src="<?= base_url() ?>assets/img/icons/logo.png" alt="MixForce"
                                                width="58">
                                        </div>
                                    </a>
                                    <h3 class="text-body-highlight">Entrar</h3>
                                    <p class="text-body-tertiary">Acesse sua conta MixForce</p>
                                </div>
                                <div class="mb-3 text-start"><label class="form-label" for="email">Email</label>
                                    <div class="form-icon-container"><input class="form-control form-icon-input"
                                            id="email" type="email" name="inputEmail" placeholder="usuario@mixforce.com"><svg
                                            class="svg-inline--fa fa-user form-icon fs-9 text-body"
                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                            data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 448 512">
                                            <path fill="currentColor"
                                                d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="mb-3 text-start"><label class="form-label" for="password">Senha</label>
                                    <div class="form-icon-container" data-password="data-password"><input
                                            class="form-control form-icon-input pe-6" id="password"
                                            type="password" name="inputPassword" placeholder="Digite sua senha"
                                            data-password-input="data-password-input"><svg
                                            class="svg-inline--fa fa-key form-icon fs-9 text-body"
                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                            data-icon="key" role="img" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path fill="currentColor"
                                                d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17l0 80c0 13.3 10.7 24 24 24l80 0c13.3 0 24-10.7 24-24l0-40 40 0c13.3 0 24-10.7 24-24l0-40 40 0c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z">
                                            </path>
                                        </svg><button
                                            class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary"
                                            data-password-toggle="data-password-toggle"><span
                                                class="uil uil-eye show"></span><span
                                                class="uil uil-eye-slash hide"></span></button></div>
                                </div>
                                <div class="row flex-between-center mb-7">
                                    <div class="col-auto">
                                        <div class="form-check mb-0"><input class="form-check-input"
                                                id="basic-checkbox" type="checkbox" checked="checked"><label
                                                class="form-check-label mb-0" for="basic-checkbox">Lembrar-me</label></div>
                                    </div>
                                    <div class="col-auto"><a class="fs-9 fw-semibold"
                                            href="forgot-password.html">Esqueceu a senha?</a></div>
                                </div>
                                <button class="btn btn-danger w-100 mb-3">Entrar</button>
                                <div class="text-center"><a class="fs-9 fw-bold" href="sign-up.html">Criar uma
                                        conta</a></div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    </main>
    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="vendors/list.js/list.min.js"></script>
    <script src="vendors/feather-icons/feather.min.js"></script>
    <script src="vendors/dayjs/dayjs.min.js"></script>
    <script src="assets/js/phoenix.js"></script>
</body>

</html>