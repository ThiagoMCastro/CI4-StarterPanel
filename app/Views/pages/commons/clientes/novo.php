<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<div class="mb-9">
  <div class="row g-2 mb-4 align-items-center">
    <div class="col-auto">
      <h2 class="mb-0">Cadastrar cliente</h2>
    </div>
    <div class="col-auto ms-auto">
      <a href="<?= base_url('dashboard/clientes/listar') ?>" class="btn btn-secondary">
        <i class="fa-solid fa-arrow-left me-2"></i>Voltar
      </a>
    </div>
  </div>

  <?php if (session()->getFlashdata('erro')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <?= session()->getFlashdata('erro') ?>
      <button class="btn-close" type="button" data-bs-dismiss="alert"></button>
    </div>
  <?php endif; ?>

  <?php if (session()->getFlashdata('sucesso')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?= session()->getFlashdata('sucesso') ?>
      <button class="btn-close" type="button" data-bs-dismiss="alert"></button>
    </div>
  <?php endif; ?>

  <form method="post" action="<?= base_url('api/clientes/novo') ?>" class="card p-4 shadow-sm">
    <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label fw-semibold">Razão Social *</label>
        <input type="text" name="razao_social" class="form-control" required>
      </div>

      <div class="col-md-6">
        <label class="form-label fw-semibold">CPF/CNPJ *</label>
        <input type="text" name="cpf_cnpj" class="form-control" required>
      </div>

      <div class="col-md-4">
        <label class="form-label fw-semibold">Telefone</label>
        <input type="text" name="telefone" class="form-control" placeholder="(99) 99999-9999">
      </div>

      <div class="col-md-4">
        <label class="form-label fw-semibold">E-mail</label>
        <input type="email" name="email" class="form-control" placeholder="exemplo@email.com">
      </div>

      <div class="col-md-4">
        <label class="form-label fw-semibold">Contato</label>
        <input type="text" name="contato_nome" class="form-control" placeholder="Nome do responsável">
      </div>

      <div class="col-md-8">
        <label class="form-label fw-semibold">Endereço</label>
        <input type="text" name="endereco" class="form-control">
      </div>

      <div class="col-md-2">
        <label class="form-label fw-semibold">Cidade</label>
        <input type="text" name="cidade" class="form-control">
      </div>

      <div class="col-md-1">
        <label class="form-label fw-semibold">UF</label>
        <input type="text" name="estado" class="form-control text-uppercase" maxlength="2">
      </div>

      <div class="col-md-2">
        <label class="form-label fw-semibold">CEP</label>
        <input type="text" name="cep" class="form-control" placeholder="00000-000">
      </div>
    </div>

    <div class="mt-4 text-end">
      <button type="submit" class="btn btn-primary px-4">
        <i class="fa-solid fa-floppy-disk me-2"></i>Salvar Cliente
      </button>
    </div>
  </form>
</div>

<?= $this->endSection(); ?>
