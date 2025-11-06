<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>
<div class="card shadow-sm p-4">
    <div class="card-header bg-primary text-white rounded">
      <div class="d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Pedido de Venda</h4>
        <div class="w-25">
          <input type="text" class="form-control form-control-sm" placeholder="Nº da Venda">
        </div>
      </div>
    </div>

    <div class="card-body">
      
      <!-- Dados Cliente -->
      <h5 class="mt-4 border-bottom pb-2">Dados do Cliente</h5>
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Razão Social</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-6">
          <label class="form-label">CPF/CNPJ</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-3">
          <label class="form-label">Data da Venda</label>
          <input type="date" class="form-control">
        </div>
        <div class="col-md-3">
          <label class="form-label">Previsão de Entrega</label>
          <input type="text" class="form-control" placeholder="Ex: 5 dias">
        </div>
        <div class="col-md-3">
          <label class="form-label">N.º Proposta</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-3">
          <label class="form-label">I.E</label>
          <input type="text" class="form-control">
        </div>
      </div>

      <!-- Informações de Contato -->
      <h5 class="mt-4 border-bottom pb-2">Informações de Contato</h5>
      <div class="row g-3">
        <div class="col-md-4">
          <label class="form-label">Nome / Setor</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-4">
          <label class="form-label">Telefone</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-4">
          <label class="form-label">E-mail</label>
          <input type="email" class="form-control">
        </div>
      </div>

      <!-- Dados Produto -->
      <h5 class="mt-4 border-bottom pb-2">Dados do Produto</h5>
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Produto</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-6">
          <label class="form-label">Produto Similar</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-3">
          <label class="form-label">Explosivo</label>
          <select class="form-select">
            <option value="">Selecione...</option>
            <option>SIM</option>
            <option>NÃO</option>
          </select>
        </div>
        <div class="col-md-3">
          <label class="form-label">Viscosidade</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-3">
          <label class="form-label">Densidade</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-3">
          <label class="form-label">Temperatura</label>
          <input type="text" class="form-control">
        </div>
      </div>

      <!-- Equipamentos -->
      <h5 class="mt-4 border-bottom pb-2 d-flex justify-content-between align-items-center">
        <span>Equipamentos</span>
        <button type="button" id="addEquip" class="btn btn-outline-primary btn-sm">+ Adicionar Item</button>
      </h5>

      <div class="table-responsive">
        <table class="table table-bordered align-middle" id="equipTable">
          <thead class="table-light">
            <tr>
              <th>Item</th>
              <th>Código</th>
              <th>Descrição</th>
              <th>Contato c/ Produto</th>
              <th>Partes Externas</th>
              <th>CV</th>
              <th>Tensão</th>
              <th>Qnt</th>
              <th>Valor Uni.</th>
              <th>Valor Total</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="number" value="1"></td>
              <td><input type="text"></td>
              <td><input type="text"></td>
              <td><input type="text"></td>
              <td><input type="text"></td>
              <td><input type="text"></td>
              <td><input type="text"></td>
              <td><input type="number" step="1"></td>
              <td><input type="text"></td>
              <td><input type="text"></td>
              <td class="text-center">
                <button class="btn btn-sm btn-outline-danger removeRow">x</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Dimensões -->
      <h5 class="mt-4 border-bottom pb-2">Dimensões</h5>
      <div class="table-responsive">
        <table class="table table-bordered align-middle" id="dimTable">
          <thead class="table-light">
            <tr>
              <th>Item</th>
              <th>Comprimento (mm)</th>
              <th>Largura (mm)</th>
              <th>Altura</th>
              <th>Peso</th>
              <th>Volume</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="number" value="1"></td>
              <td><input type="text"></td>
              <td><input type="text"></td>
              <td><input type="text"></td>
              <td><input type="text"></td>
              <td><input type="text"></td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Frete -->
      <h5 class="mt-4 border-bottom pb-2">Frete</h5>
      <div class="row g-3">
        <div class="col-md-4">
          <label class="form-label">Frete</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-4">
          <label class="form-label">Valor</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-4">
          <label class="form-label">Transportadora</label>
          <input type="text" class="form-control">
        </div>
      </div>

      <!-- Observações -->
      <h5 class="mt-4 border-bottom pb-2">Observações</h5>
      <textarea class="form-control" rows="3" placeholder="Adicione observações..."></textarea>

      <!-- Dados para Faturamento -->
      <h5 class="mt-4 border-bottom pb-2">Dados para Faturamento</h5>
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Forma de Pagamento</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-6">
          <label class="form-label">Contato</label>
          <input type="text" class="form-control">
        </div>
      </div>
      <!-- Botão -->
      <div class="text-end mt-4">
        <button class="btn btn-success">Salvar Pedido</button>
      </div>

    </div>
  </div>
<?= $this->endSection(); ?>