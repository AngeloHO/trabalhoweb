<?php

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" />
    <title>Gestão de Usuários</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary shadow-sm mb-4">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav me-auto">
                    <a class="nav-link " href="homepage.php">Ativos</a>
                    <a class="nav-link active" href="ger_users_inativos.php">Inativos</a>
                </div>
                <a href="logout.php" class="btn btn-danger">Sair</a>

            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <h1 class="display-5 mb-4 text-center">Gestão de Usuários</h1>
        <hr>
        <div class="table">
            <table id="userTable" class="table table-hover table-bordered align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nome Completo</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Status</th>
                        <th scope="col">Data de Cadastro</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dados serão carregados aqui via DataTables -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal de Edição -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title" id="editModalLabel">Editar Usuário</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm">
                        <div class="mb-3">
                            <label for="editName" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="editName" required>
                        </div>
                        <div class="mb-3">
                            <label for="editEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="editEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="editNomeCompleto" class="form-label">Nome Completo</label>
                            <input type="text" class="form-control" id="editNomeCompleto">
                        </div>
                        <div class="mb-3">
                            <label for="editEndereco" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="editEndereco">
                        </div>
                        <div class="mb-3">
                            <label for="editTelefone" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" id="editTelefone">
                        </div>
                        <div class="mb-3">
                            <label for="editStatus" class="form-label">Status</label>
                            <select class="form-select" id="editStatus">
                                <option value="A">ATIVO</option>
                                <option value="I">INATIVO</option>
                            </select>
                        </div>
                        <input type="hidden" id="editId">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-success" id="saveChanges">Salvar alterações</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            var table = $('#userTable').DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
                    sSearch: "Pesquisar:",
                    sLengthMenu: "Mostrar _MENU_ opções",
                    sInfo: "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    sInfoEmpty: "Mostrando 0 a 0 de 0 registros",
                    sInfoFiltered: "(filtrado de _MAX_ registros totais)",
                    sZeroRecords: "Nenhum registro encontrado",
                    sEmptyTable: "Nenhum dado disponível na tabela",
                    sLoadingRecords: "Carregando...",
                    sProcessing: "Processando...",
                    sFirst: "Primeiro",
                    sLast: "Último",
                    sNext: "Próximo",
                    sPrevious: "Anterior",
                    sSortAscending: ": ativar para ordenar coluna ascendente",
                    sSortDescending: ": ativar para ordenar coluna descendente",
                    buttons: {
                        pageLength: {
                            _: "Mostrar %d opções",
                        },
                    },
                },
                "ajax": "get_users_inativo.php",
                "columns": [
                    { "data": "USU_ID" },
                    { "data": "USU_NOME" },
                    { "data": "USU_EMAIL" },
                    { "data": "USU_NOME_COMPLETO" },
                    { "data": "USU_ENDERECO" },
                    { "data": "USU_TELEFONE" },
                    { "data": "USU_STATUS" },
                    { "data": "USU_DATA_CADASTRO" },
                    {
                        "data": null,
                        "defaultContent": '<button type="button" class="btn bg-dark text-white btn-sm editButton">Editar</button>'
                    }
                ]
            });

            $('#userTable').on('click', '.editButton', function () {
                var data = table.row($(this).parents('tr')).data();
                $('#editName').val(data.USU_NOME);
                $('#editEmail').val(data.USU_EMAIL);
                $('#editNomeCompleto').val(data.USU_NOME_COMPLETO);
                $('#editEndereco').val(data.USU_ENDERECO);
                $('#editTelefone').val(data.USU_TELEFONE);
                $('#editStatus').val(data.USU_STATUS === 'ATIVO' ? 'A' : 'I');
                $('#editId').val(data.USU_ID);
                $('#editModal').modal('show');
            });

            $('#saveChanges').click(function () {
                var id = $('#editId').val();
                var name = $('#editName').val();
                var email = $('#editEmail').val();  // Corrigido
                var nomeCompleto = $('#editNomeCompleto').val();
                var endereco = $('#editEndereco').val();  // Corrigido
                var telefone = $('#editTelefone').val();  // Corrigido
                var status = $('#editStatus').val();

                $.ajax({
                    url: 'update_user.php',
                    method: 'POST',
                    data: {
                        id: id,
                        name: name,
                        email: email,  // Adicionado
                        nomeCompleto: nomeCompleto,
                        endereco: endereco,  // Adicionado
                        telefone: telefone,  // Adicionado
                        status: status
                    },
                    success: function (response) {
                        if (response.trim() === "success") {
                            $('#editModal').modal('hide');
                            alert('Alterado com sucesso');
                            table.ajax.reload();
                        } else {
                            alert('Erro ao atualizar usuário: ' + response); // Mostra a mensagem de erro
                        }
                    },
                    error: function () {
                        alert('Ocorreu um erro ao tentar atualizar o usuário.');
                    }
                });
            });
        });
    </script>
</body>

</html>