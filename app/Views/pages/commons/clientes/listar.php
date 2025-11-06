<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>
<?php
use App\Models\ClienteModel;
$clienteModel = new ClienteModel();

// busca todos os clientes cadastrados
$clientes = $clienteModel->orderBy('id', 'DESC')->findAll();
?>
<div class="mb-9">
    <div class="row g-2 mb-4">
        <div class="col-auto">
            <h2 class="mb-0">Lista de clientes</h2>
        </div>
    </div>

    <div id="customers"
        data-list='{"valueNames":["cliente","email","cidade","ultimoPedido","totalPedidos","totalGasto"],"page":10,"pagination":true}'>

        <div class="mb-4">
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <div class="search-box">
                        <form class="position-relative">
                            <input class="form-control search-input search" type="search"
                                   placeholder="Pesquisar clientes..." aria-label="Pesquisar">
                            <svg class="svg-inline--fa fa-magnifying-glass search-box-icon"></svg>
                        </form>
                    </div>
                </div>

                <div class="col-auto ms-auto">
                    <button class="btn btn-link text-body me-4 px-0">
                        <i class="fa-solid fa-file-export fs-9 me-2"></i>Exportar
                    </button>
                    <a href="<?= base_url('dashboard/clientes/novo') ?>" class="btn btn-primary">
                        <i class="fa-solid fa-plus me-2"></i>Novo Cliente
                    </a>
                </div>
            </div>
        </div>

        <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1">
            <div class="table-responsive scrollbar-overlay mx-n1 px-1">
                <table class="table table-sm fs-9 mb-0">
                    <thead>
                        <tr>
                            <th class="white-space-nowrap fs-9 align-middle ps-0">
                                <div class="form-check mb-0 fs-8">
                                    <input class="form-check-input" id="checkbox-bulk-select" type="checkbox"
                                           data-bulk-select='{"body":"customers-table-body"}'>
                                </div>
                            </th>
                            <th class="sort align-middle" scope="col" data-sort="cliente" style="width:25%;">Cliente</th>
                            <th class="sort align-middle" scope="col" data-sort="email" style="width:25%;">E-mail</th>
                            <th class="sort align-middle" scope="col" data-sort="cidade" style="width:20%;">Cidade</th>
                            <th class="sort align-middle text-end" scope="col" data-sort="totalPedidos" style="width:10%;">Pedidos</th>
                            <th class="sort align-middle text-end" scope="col" data-sort="totalGasto" style="width:10%;">Total Gasto</th>
                            <th class="sort align-middle text-end pe-0" scope="col" data-sort="ultimoPedido" style="width:10%;">Último Pedido</th>
                        </tr>
                    </thead>
                    <tbody class="list" id="customers-table-body">

                        <?php if (!empty($clientes)): ?>
                            <?php foreach ($clientes as $c): ?>
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                    <td class="align-middle ps-0 py-3">
                                        <div class="form-check mb-0 fs-8">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td class="cliente align-middle white-space-nowrap fw-bold text-body-emphasis">
                                        <?= esc($c['contato_nome']) ?>
                                    </td>
                                    <td class="email align-middle white-space-nowrap">
                                        <a href="mailto:<?= esc($c['email']) ?>" class="fw-semibold"><?= esc($c['email']) ?></a>
                                    </td>
                                    <td class="cidade align-middle white-space-nowrap text-body-highlight">
                                        <?= esc($c['cidade']) ?>
                                    </td>
                                    <td class="ultimoPedido align-middle white-space-nowrap text-end text-body-tertiary">
                                        <?= !empty($c['ultimo_pedido']) ? date('d/m/Y', strtotime($c['ultimo_pedido'])) : '-' ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr><td colspan="7" class="text-center py-4">Nenhum cliente encontrado.</td></tr>
                        <?php endif; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
