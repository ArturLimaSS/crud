<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-xl bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">TEIJO</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modal_cadastro">Cadastro</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modal_listagem">Listagem</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Opções
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="options.php">Opções de Cadastros</a></li>
                      <li><a class="dropdown-item" href="#">Opções de Contratos</a></li>
                      <li><a class="dropdown-item" href="#">Opções do Usuário</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div>
    <div id="modal_cadastro" class="modal fade" tabindex="-1" aria-labelledby="modal_title">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" >
                        <h5 class="modal-title" id="modal_title">Cadastro</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="cadastro" id="cadastro" action="insert.php" method="post">
                    <div class="modal-body">
                        <div class="nome">
                            <label for="nome" class="label-form">Nome</label>
                            <input id="nome" name="nome" type="text" class="form-control form-control-lg">
                            <label for="email" class="label-form">Email</label>
                            <input type="email" name="email" class="form-control form-control-lg" id="email">
                            <label for="contato" class="label-control">Contato</label>
                            <input type="number" name="contato" class="form-control form-control-lg">
                            <label for="idade" class="label-form">Idade</label>
                            <input type="number" name="idade" class="form-control form-control-lg">
                            <label for="estado_civil_select" class="form-label">Estado Civil</label>
                            <?php require_once '../db/db.php';?>
                          <select class="form-select form-select-lg" name="estado_civil" id="estado_civil_select">
                          <?php while($resultado = mysqli_fetch_array($queryEstadoCivil)){
                          ?>
                          <option value="<?= $resultado['id']?>"><?php echo $resultado['descricao'] ?></option>
                        <?php } ?>  
                        </select>
                            <?php 
                            /*<?php $sql  = mysqli_query($conexao, "select nome_fantasia from fornecedores");?>
            <select><?php
              while($resultado = mysqli_fetch_array($sql)){ ?>     
                  <option value="<?=  $resultado['id'] ?>"><?php echo $resultado['campo_do_seu_banco']; ?></option>
                  <?php } ?>
            </select>*/
                            ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button class="btn btn-primary" type="submit">Salvar</button>
                    </div>
                    </div>
                </div>
            </div>
    </div>
    <div id="modal_listagem" class="modal fade" tabindex="-1" aria-labelledby="modal_title">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header" style="background-color: rgb(248,249,250)">
            <h5 class="modal-title" id="modal_title">Listagem</h5>
            <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
          <?php
require_once '../db/db.php';


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo 
'<table class = "table table-hover table-bordered" style="text-align:center">
  <thead class="thead-dark">
    <tr>'
//<th>ID</th>
    .'<th>NOME</th>
      <th>EMAIL</th>
      <th>TELEFONE</th>
      <th>IDADE</th>
      <th>ESTADO CIVIL</th>
    </tr>
  </thead>
  <tbody>'
;
if ($pesquisarTodosOsDados->num_rows > 0) {
  // output data of each row
  while($row = $pesquisarTodosOsDados->fetch_assoc()) {
    echo "<tr>";
    //echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["nome"]."</td>";
    echo '<td type="email">'.$row["email"]."</td>";
    echo '<td>'.$row["contato"].'</td>';
    echo '<td>'.$row['idade'].'</td>';
    echo '<td>'.$row['descricao'].'</td>';
}
} else {
  echo "";
}

$conn->close();

?>
          </div>
        </div>
      </div>
    </div>
</body>
</html>