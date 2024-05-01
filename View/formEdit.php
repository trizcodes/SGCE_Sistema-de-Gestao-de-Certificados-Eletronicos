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
         <?php include '../aside/aside-user.php'; ?>
        

        
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
                        <h3 class="fw-bold fs-4 mb-3">Sistema de Gestão de Certificado Eletrônico </h3>
                        <div class="row"></div>

                        
                                    <h3 class="fw-bold fs-4 my-3">Suas Informações</h3>
                        <div class="row">
                            <div class="col-12">

                                <?php
                                include_once '../Model/Users.php';
                                include_once '../Model/UsersDAO.php';

                                

                                $user = new Users();
                                $userDAO = new UsersDAO();

                                $id = filter_input(INPUT_GET, "id");

                                $user->setId($id);

                                $result = $userDAO->selectById($user);

                                ?>

                                <form method="POST" action="../Controller/editUser.php">
                                    <input type="hidden" name="id" value="<?=$result->id?>">

                                    <div class="form-row">
                                        <div class="form-group col-md-4 mt-2">
                                            <label for="name">Nome completo</label>
                                            <input type="text" class="form-control" id="name" name="name" value="<?=$result->name?>">
                                        </div>

                                        <div class="form-group col-md-4 mt-2">
                                            <label for="inputEmail4">Email</label>
                                            <input type="email" class="form-control" id="inputEmail4" name="mail" value="<?=$result->mail?>">
                                        </div>

                                        <div class="form-group col-md-4 mt-2">
                                            <label for="cpf">CPF</label>
                                            <input type="text" class="form-control" id="cpf" placeholder="CPF">
                                        </div>

                                        <div class="form-group col-md-4 mt-2">
                                            <label for="senha">Senha</label>
                                            <input type="text" class="form-control" name="pass" id="senha"  value="<?=$result->password?>">
                                        </div>

                                        <div class="form-group col-md-4 mt-2">
                                            <label for="inputState">Gênero</label>
                                                <select id="inputState" class="form-control">
                                                    <option selected>Selecione...</option>
                                                    <option>Feminino</option>
                                                    <option>Masculino</option>
                                                    <option>Outro</option>
                                                </select>
                                        </div>

                                        <div class="form-group col-md-4 mt-2">
                                            <label for="status">Status ( Está ativo no sistema? )</label>
                                            <select class="form-control" name="status" id="status">
                                            <?php 

                                            if($result->status == "S") {
                                                    echo "<option value='S' selected>Sim</option>";
                                                    echo "<option value='N' selected>Não</option>";
                                            } else {
                                                echo "<option value='S'>Sim</option>";
                                                echo "<option value='N'>Não</option>";

                                            }
                                            
                                            ?>

                                            </select>
                                        </div>

                                    </div>


                                        <button type="submit" class="btn btn-primary mt-4" onclick="return confirm('Deseja mesmo alterar as informações desse usuário?')"> Editar </button>
                                </form>
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
                                <strong>Sistema de Gestão de Certificado Eletrônico - Página Usuário </strong> <br> 
                                <li class="list-inline-item">
                                    <a class="text-body-secondary" href="#">Todos os direitos reservado a @Trizcodes</a>
                                </li>
                            </a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
</body>

</html>