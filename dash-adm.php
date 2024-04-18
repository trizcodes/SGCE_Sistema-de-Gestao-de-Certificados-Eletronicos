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
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>
    <div class="wrapper"> <!-- Aqui será colocado o Aside do Usuário -->
         <?php include 'aside/aside-adm.php'; ?>
        

        
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
                        <div class="row">


                            <div class="col-12 col-md-4 ">
                                <div class="card border-0">
                                    <div class="card-body py-4">
                                        <h5 class="mb-2 fw-bold">
                                            Criar Evento
                                        </h5>
                                        <p class="mb-2 fw-bold">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#EventModal">Criar Evento</button>
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 ">
                                <div class="card border-0">
                                    <div class="card-body py-4">
                                        <h5 class="mb-2 fw-bold">
                                            Adicionar usuário
                                        </h5>
                                        <p class="mb-2 fw-bold">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUser">Adicionar usuário</button>
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                            


                            
                        </div>

                        <h3 class="fw-bold fs-4 my-3">Eventos ativos
                        </h3>
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="highlight">
                                            <th scope="col">#</th>
                                            <th scope="col">Evento</th>
                                            <th scope="col">Dia</th>
                                            <th scope="col">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>



                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Nome</td>
                                            <td>dd/mm/yy</td>
                                            <td><button class="btn btn-danger"> Apagar Evento </button></td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        
                        <h3 class="fw-bold fs-4 my-3">Certificado
                        </h3>
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="highlight">
                                            
                                            <th scope="col">Layout do Certificado</th>
                                            <th scope="col">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                       
                                            <td><img src="" alt=""></td>
                                            <td><button>Editar Layout</button></td>
                                        </tr>
                                       
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
                                <strong>Sistema de Gestão de Certificado Eletrônico - Página Administrador </strong>
                            </a>
                        </div>
                        <div class="col-6 text-end text-body-secondary d-none d-md-block">
                            <ul class="list-inline mb-0">


                                <li class="list-inline-item">
                                    <a class="text-body-secondary" href="#">Todos os direitos reservado a @Trizcodes</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <div class="modal fade" id="EventModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Novo Evento</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">

                    <form action="" method="POST">


                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nome do Evento:</label>
                            <input type="text" class="form-control" id="name-event">
                        </div>


                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Data:</label>
                            <input type="date" class="form-control" name="date" id="date">
                        </div>

                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Horário:</label>
                            <input type="time" class="form-control" name="time" id="date">
                        </div>
                        

                    </form>
            </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar Evento</button>
      </div>
    </div>
  </div>
</div>



    <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Gerenciamento de Usuário - Novo usuário</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">

                    <form action="#" method="#">


                        <div class="mb-3">
                            <label for="Nome" class="col-form-label">Nome:</label>
                            <input type="text" class="form-control" id="Nome" name="nome">
                        </div>


                        <div class="mb-3">
                            <label for="Mail" class="col-form-label">Email:</label>
                            <input type="text" class="form-control" name="mail" id="Mail" arial-describedby="mailHelp">
                            <div id="mailHelp" class="form-text mt-2"> Verifique se o e-mail está correto </div>
                        </div>
                        

                    </form>
            </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Fechar</button>
        <button type="button" class="btn btn-primary">Salvar </button>
      </div>
    </div>
  </div>
</div>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>