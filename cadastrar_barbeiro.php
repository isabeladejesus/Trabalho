<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="cadastrar_barbeiro.php">Cadastrar Barbeiro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Link</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>


    <div class="container mt-3">
        <h2>Cadastro do Barbeiro</h2>
        <form action="cadastra2.php" method="post">
          <div class="mb-3 mt-3">
            <label for="">Nome do Barbeiro:</label>
            <input type="text" class="form-control" id="nome_de_usuario" placeholder="" name="nome_de_usuario">
          </div>
          <div class="mb-3">
            <label for="">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="" name="email">
          </div>
          <div class="mb-3">
            <label for="">Data de Nascimento:</label>
            <input type="date" class="form-control" id="data_de_nascimento" placeholder="" name="data_de_nascimento">
          </div>
          <div class="mb-3">
            <label for="">Nome do Banco:</label>
            <input type="" class="form-control" id="nome_do_banco" placeholder="" name="nome_do_banco">
          </div>
          <div class="mb-3">
            <label for="">Número da Agência:</label>
            <input type="text" class="form-control" id="numeroAgencia" placeholder="" name="numeroAgencia">
          </div>
          <div class="mb-3">
            <label for="">Número da Conta:</label>
            <input type="number" class="form-control" id="numeroConta" placeholder="" name="numeroConta">
          </div>
          <div class="mb-3">
            <label for="">Chave Pix:</label>
            <input type="text" class="form-control" id="chavePIX" placeholder="" name="chavePIX">
          </div>
          <div class="form-check mb-3">
           
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>
      
</body>
</html>