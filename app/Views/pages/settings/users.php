<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>
<h1 class="h3 mb-3"><strong>Usuários do sistema</strong></h1>
<div class="row">
    <div class="col-12">
        <div class="card flex-fill">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    Lista de usuários
                    <button class="btn btn-primary btn-sm float-end btnAdd" data-bs-toggle="modal" data-bs-target="#formUserModal">
                        Criar usuário
                    </button>
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th class="d-none d-xl-table-cell">Email</th>
                                <th>Cargo</th>
                                <th>Criado em</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($Users as $users) : ?>
                                <tr>
                                    <td><?= $users['fullname']; ?></td>
                                    <td class="d-none d-md-table-cell"><?= $users['username']; ?></td>
                                    <td>
                                        <?php
                                        // Converte role numérico em texto
                                        $roles = [1 => 'Vendedor', 2 => 'Administrador', 3 => 'Superadmin'];
                                        echo '<span class="badge bg-success">' . ($roles[$users['role']] ?? 'Vendedor') . '</span>';
                                        ?>
                                    </td>
                                    <td><?= $users['created_at']; ?></td>
                                    <td>
                                        <button class="btn btn-info btn-sm btnEdit" data-bs-toggle="modal" data-bs-target="#formUserModal"
                                            data-id="<?= $users['userID']; ?>"
                                            data-fullname="<?= $users['fullname']; ?>"
                                            data-username="<?= $users['username']; ?>"
                                            data-role="<?= $users['role']; ?>">
                                            Update
                                        </button>

                                        <?php if ($users['username'] != session()->get('username')) : ?>
                                            <form action="<?= base_url('dashboard/users/delete-user/' . $users['userID']); ?>" method="post" class="d-inline">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-danger btn-sm" onclick="return confirm('Quer mesmo deletar <?= $users['username']; ?> ?')">Deletar</button>
                                            </form>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

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

<?= $this->endSection(); ?>

<?= $this->section('javascript'); ?>
<script>
$(document).ready(function() {
    const roleOptions = `
        <option value="">-- Escolha o cargo --</option>
        <option value="1">Vendedor</option>
        <option value="2">Administrador</option>
        <option value="3">Superadmin</option>
    `;

    // ===== BOTÃO ADICIONAR =====
    $(".btnAdd").click(function() {
        $('#formUserModalLabel').html('Criar Usuário');
        $('.modal-footer button[type=submit]').html('Salvar');
        $('.modal-content form').attr('action', '<?= base_url('dashboard/users/create-user'); ?>');

        // Limpar todos os campos
        $('#userID').val('');
        $('#inputFullname').val('');
        $('#inputUsername').val('');
        $('#inputPassword').val('');
        $('#inputRole').html(roleOptions).val('');

        // Reativar campo email e senha obrigatória
        $('#inputUsername').attr('readonly', false);
        $('#inputPassword').attr('required', true);
    });

    // ===== BOTÃO EDITAR =====
    $(".btnEdit").click(function() {
        const userId = $(this).data('id');
        const fullname = $(this).data('fullname');
        const username = $(this).data('username');
        const role = $(this).data('role');

        $('#formUserModalLabel').html('Editar Usuário');
        $('.modal-footer button[type=submit]').html('Atualizar');
        $('.modal-content form').attr('action', '<?= base_url('dashboard/users/update-user'); ?>');

        // Preencher campos
        $('#userID').val(userId);
        $('#inputFullname').val(fullname);
        $('#inputUsername').val(username);
        $('#inputPassword').val('');
        $('#inputRole').html(roleOptions).val(role);

        // Bloquear email e senha opcional
        $('#inputUsername').attr('readonly', true);
        $('#inputPassword').attr('required', false);
    });
});
</script>

<?= $this->endSection(); ?>
