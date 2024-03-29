<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>SGCE</title>
</head>

    <body class="d-flex align-items-center py-4 bg-body-tertiary">
        <main class="w-100 m-auto form-container">
            <form action="#">
                <img src="#" alt="" class="mb-4" height="57" width="72">
                <h1 class="h3 mb-3 fw-normal">Sistema de Gestão de Certificados Eletrônicos </h1>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatinInput" placeholder="E-mail">
                    <label for="floatinInput">E-mail</label>
                </div>
                <div class="form-floating mt-2">
                    <input type="password" class="form-control" id="floatinInput" placeholder="Senha">
                    <label for="floatinInput">Senha</label>
                </div>

                <div class="text-start my-3">
                    <p>Não tem uma conta? <a href="">Aperte aqui para criar</a></p>
                </div>

                <button class="btn btn-primary w-100 py-2"> Entrar </button>
                <p class="text-body-secondary mt-5 mb-3">© 2024 - Trizcodes </p>
            </form>
        </main>

        <div vw class="enabled">
            <div vw-access-button class="active"></div>
                <div vw-plugin-wrapper>
                <div class="vw-plugin-top-wrapper"></div>
            </div>
        </div>

          <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
          <script>
            new window.VLibras.Widget('https://vlibras.gov.br/app');
          </script>
    </body>


</html>