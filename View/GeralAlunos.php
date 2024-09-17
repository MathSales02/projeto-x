<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/aluno.css">
    <?php include "../model/link.php" ?>
</head>

<body class="">
    <?php include './scrollHorizontal.php' ?>
    <body>
  <div class="container-fluid">
    <div class="row my-4">
      <!-- Navegação lateral -->
      <nav class="col-12 col-md-4 col-lg-3 mb-4 mb-md-0">
        <ul class="list-unstyled">
          <li class="mb-2">
            <p class="mb-0">Nome do Paciente:</p>
            <hr>
          </li>
          <li class="mb-2">
            <p class="mb-0">Escola:</p>
          </li>
          <li class="mb-2">
            <p class="mb-0">Série:</p>
          </li>
        </ul>
      </nav>
      </div>
      
      <!-- Conteúdo adicional -->
      <div class="col-12 col-md-8 col-lg-9 mx-4 py-4">
        <div class="row text-primary">
          <div class="col-12 col-sm-6 col-md-4 mb-4">
            <div class="d-flex flex-column align-items-center p-3 border bg-light h-100 ">
              <p class="text-center">Ditado</p>
              <i class="bi bi-download fs-4 mt-2 "></i>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 mb-4">
            <div class="d-flex flex-column align-items-center p-3 border bg-light h-100">
              <p class="text-center">Laudo</p>
              <i class="bi bi-download fs-4 mt-2"></i>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 mb-4">
            <div class="d-flex flex-column align-items-center p-3 border bg-light h-100">
              <p class="text-center">Encaminhamento</p>
              <i class="bi bi-download fs-4 mt-2"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  
</body>

</html>