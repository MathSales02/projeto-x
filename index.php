<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projeto</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="./css/main.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <!-- Fontes -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
</head>

<body class=" vh-100">
  <div class=" container-fluid d-flex align-items-center  justify-content-center ">
    <section>
      <div class="text-light ">
        <div class="row d-flex align-items-center justify-content-center ">
          <!-- Imagem -->
          <div class="col-md-7 col-lg-5 mb-5 mb-md-3">
            <img class="img-fluid rounded-3" src="./img/inicio.png" alt="Imagem de Início">
          </div>

          <!-- Formulário -->
          <div
            class=" col-md-8 col-lg-6 col-xl-5 text-center text-md-start my-4 px-5 py-md-5 mx-5 shadow-sm section-login">
            <form action="./controller/validaLogin.php" method="post" id="login">
              <!-- Email input -->
              <div class="mb-3">
                <input id="user" name="user" type="email" class="form-control form-control-lg"
                  placeholder="Usuário / E-mail" />
                <span class="invalid-feedback bg-transparent text-dark" id="userErro"></span>
              </div>

              <!-- Password input -->
              <div class="mb-3">
                <input id="pass" name="pass" type="password" class="form-control form-control-lg" placeholder="Senha" />
                <span class="bg-transparent text-dark" id="passErro"></span>

              </div>

              <!-- Forgot password link -->
              <div class="text-end mb-3">
                <a href="#" class="text-primary">Esqueci a senha</a>
              </div>

              <!-- Submit button -->
              <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg w-100" name="submit"
                  value="Acessar">Acessar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  <script>

  </script>
  <!-- Bootstrap JS, Popper.js, and jQuery (opcional) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/jquery/dist/jquery.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="./JS/validaLogin.js"></script>
</body>

</html>