<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGCE</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/dashboard.css">
</head>

<body>
    <div class="wrapper"> <!-- Aqui será colocado o Aside do Usuário -->
         <?php include '../aside/aside-adm.php'; ?>
        

        
        <div class="main">
            <nav class="navbar navbar-expand px-4 py-3">
                <form action="#" class="d-none d-sm-inline-block">

                </form>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="/account.png" class="avatar img-fluid" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end rounded">
                                <p>SAIR</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>


            <main class="content px-3 py-4">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h3 class="fw-bold fs-4 mb-3">Sistema de Gestão de Certificado Eletrônico - Controle de Usuários </h3>

                        
                    <!--======= USUARIOS CADASTRADOS ======-->    
                    <h3 class="fw-bold fs-4 my-3"> Usuários Cadastrados no Sistema</h3>
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-hover">
                                    <thead>
                                            <tr class="highlight">
                                                    
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Nome</th>
                                                    <th scope="col">E-mail</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col"></th>
                                                    
                                            </tr>
                                    </thead>

                                    <tbody>
                                    <?php 
                                        include_once '../Model/UsersDAO.php';

                                        $userDAO = new UsersDAO();
                                        foreach($userDAO->select () as $result) {
                                    ?>

                                <tr>

                                    <td scope="row"><?=$result->id ?></td>
                                    <td><?=$result->name ?></td>
                                    <td><?=$result->mail ?><td>
                                    <td><?=$result->status ?><td>
                                    <td>
                                        <a href="../Controller/delUser.php?id=<?=$result->id ?>" class="btn btn-outline-danger" 
                                        onclick="return confirm('Deseja mesmo excluir esse usuário? Aperte OK para confirmar')"> Apagar Usuário </a>
                                        <button class="btn btn-outline-success"> Reenviar Certificado </button>
                                        <a href="formEdit.php?id=<?=$result->id ?>" class="btn btn-outline-secondary"> 
                                            Editar Informações 
                                        </a>
                                    </td>

                                <tr>
                                    <?php
                                    }



                                    ?>



                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-body-secondary">
                        <div class="col-6 text-start ">
                            <a class="text-body-secondary" href=" #">
                                <strong>Sistema de Gestão de Certificado Eletrônico - Página Administrador </strong> <br>
                                <a class="text-body-secondary" href="#">Todos os direitos reservado a @Trizcodes</a>
                            </a>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
    </div>

        <!--============ MODAL EDITAR INFORMAÇÕES =========-->
    <div class="modal fade" id="edituser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"> Editar Usuário </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                    <div class="modal-body">
                        <form action="" method="POST">

                            <div class="mb-3">
                                <label for="name" class="col-form-label">Nome do usuário</label>
                                <input type="text" class="form-control" id="name">
                            </div>


                            <div class="mb-3">
                                <label for="email" class="col-form-label">E-mail</label>
                                <input type="email" class="form-control" name="mail" id="email">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="col-form-label">Alterar senha</label>
                                <input type="text" class="form-control" name="password" id="password">
                            </div>

                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-success">Salvar</button>
                    </div>
            </div>
        </div>
    </div>


    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
</body>

</html>