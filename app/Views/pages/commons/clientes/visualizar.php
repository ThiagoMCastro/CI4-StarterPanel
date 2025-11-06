<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Detalhes do Cliente</h3>
        <a href="<?= base_url('dashboard/clientes') ?>" class="btn btn-secondary btn-sm">Voltar</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="fw-semibold">Razão Social</label>
                    <p><?= esc($cliente['razao_social']) ?></p>
                </div>

                <div class="col-md-6">
                    <label class="fw-semibold">CPF/CNPJ</label>
                    <p><?= esc($cliente['cpf_cnpj']) ?></p>
                </div>

                <div class="col-md-4">
                    <label class="fw-semibold">Telefone</label>
                    <p><?= esc($cliente['telefone']) ?></p>
                </div>

                <div class="col-md-4">
                    <label class="fw-semibold">Email</label>
                    <p><?= esc($cliente['email']) ?></p>
                </div>

                <div class="col-md-4">
                    <label class="fw-semibold">Contato</label>
                    <p><?= esc($cliente['contato_nome']) ?></p>
                </div>

                <div class="col-md-6">
                    <label class="fw-semibold">Endereço</label>
                    <p><?= esc($cliente['endereco']) ?></p>
                </div>

                <div class="col-md-3">
                    <label class="fw-semibold">Cidade</label>
                    <p><?= esc($cliente['cidade']) ?></p>
                </div>

                <div class="col-md-1">
                    <label class="fw-semibold">UF</label>
                    <p><?= esc($cliente['estado']) ?></p>
                </div>

                <div class="col-md-2">
                    <label class="fw-semibold">CEP</label>
                    <p><?= esc($cliente['cep']) ?></p>
                </div>

                <div class="col-12">
                    <label class="fw-semibold">Cadastrado em</label>
                    <p><?= date('d/m/Y H:i', strtotime($cliente['criado_em'])) ?></p>
                </div>
            </div>

            <div class="mt-4">
                <a href="<?= base_url('dashboard/clientes/editar/'.$cliente['id']) ?>" class="btn btn-warning">Editar</a>
                <a href="<?= base_url('dashboard/clientes/excluir/'.$cliente['id']) ?>" 
                   class="btn btn-danger" onclick="return confirm('Deseja realmente excluir este cliente?')">Excluir</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
