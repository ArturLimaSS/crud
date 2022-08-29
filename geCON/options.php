<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
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
                    <a class="nav-link active" aria-current="page" href="geCON.php">Home</a>
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
                    <li><a class="dropdown-item" href="#">Opções de Cadastros</a></li>
                    <li><a class="dropdown-item" href="#">Opções de Contratos</a></li>
                    <li><a class="dropdown-item" href="#">Opções do Usuário</a></li>
                    </ul>
                </li>
                </ul>
            </div>
            </div>
        </nav>
    </div>
    <div class="container justify-content-center">
    <?php

    require_once '..//db/db.php';
        if ($pesquisarTodosOsDados -> num_rows > 0){
            while ($row = $pesquisarTodosOsDados->fetch_assoc()){
            echo'
            <div style="padding-top:10px;">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card" style="width: 70%">
                            <div class="card-body">
                                <h5 class="card-title">'.$row['nome'].'</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias ex quia debitis tenetur, incidunt rem id iure odio cum magni blanditiis temporibus totam vero ducimus quam neque hic aperiam laboriosam.</p>
                                <button class="btn btn-link">Editar</button>
                                <form action="desativa.php">
                                <button class="btn btn-link" type="submit">Desativar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ';
            }
        };
    ?>


    </div>
</body>
</html>