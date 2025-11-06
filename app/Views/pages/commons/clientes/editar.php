<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Editar Cliente</h3>
        <a href="<?= base_url('dashboard/clientes') ?>" class="btn btn-secondary btn-sm">Voltar</a>
    </div>

    <?php if (session()->getFlashdata('erro')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('erro') ?></div>
    <?php elseif (session()->getFlashdata('sucesso')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('sucesso') ?></div>
    <?php endif; ?>

    <form method="post" action="<?= base_url('dashboard/clientes/editar/'.$cliente['id']) ?>">
        <?= csrf_field() ?>

        <div class="row g-3">
            <div class="col-md-6">
                <label>Razão Social *</label>
                <input type="text" name="razao_social" class="form-control" required value="<?= esc($cliente['razao_social']) ?>">
            </div>

            <div class="col-md-6">
                <label>CPF/CNPJ *</label>
                <input type="text" name="cpf_cnpj" class="form-control" required value="<?= esc($cliente['cpf_cnpj']) ?>">
            </div>

            <div class="col-md-4">
                <label>Telefone</label>
                <input type="text" name="telefone" class="form-control" value="<?= esc($cliente['telefone']) ?>">
            </div>

            <div class="col-md-4">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="<?= esc($cliente['email']) ?>">
            </div>

            <div class="col-md-4">
                <label>Contato</label>
                <input type="text" name="contato_nome" class="form-control" value="<?= esc($cliente['contato_nome']) ?>">
            </div>

            <div class="col-md-6">
                <label>Endereço</label>
                <input type="text" name="endereco" class="form-control" value="<?= esc($cliente['endereco']) ?>">
            </div>

            <div class="col-md-3">
                <label>Cidade</label>
                <input type="text" name="cidade" class="form-control" value="<?= esc($cliente['cidade']) ?>">
            </div>

            <div class="col-md-1">
                <label>UF</label>
                <input type="text" name="estado" maxlength="2" class="form-control" value="<?= esc($cliente['estado']) ?>">
            </div>

            <div class="col-md-2">
                <label>CEP</label>
                <input type="text" name="cep" class="form-control" value="<?= esc($cliente['cep']) ?>">
            </div>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-success">Salvar Alterações</button>
            <a href="<?= base_url('dashboard/clientes') ?>" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>

<?= $this->endSection() ?>
