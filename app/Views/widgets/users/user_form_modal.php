<div class="modal" id="formUserModal" tabindex="-1" aria-labelledby="formUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formUserModalLabel">Criar usuário</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('dashboard/users/create-user'); ?>" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="userID" id="userID">
                    <div class="mb-3">
                        <label for="inputFullname" class="col-form-label">Nome completo:</label>
                        <input type="text" class="form-control" name="inputFullname" id="inputFullname" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputUsername" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" name="inputUsername" id="inputUsername" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="col-form-label">Senha:</label>
                        <input type="password" class="form-control" name="inputPassword" id="inputPassword" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputRole" class="col-form-label">Cargo:</label>
                        <select name="inputRole" id="inputRole" class="form-control" required>
                            <option value="">-- Escolha o cargo --</option>
                            <option value="1">Vendedor</option>
                            <option value="2">Administrador</option>
                            <option value="3">Superadmin</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fechar</button>
                </div>
            </form>
        </div>
    </div>
</div>
