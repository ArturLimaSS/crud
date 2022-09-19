<?php
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
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
                            <a class="nav-link active" aria-current="page" href="geCON.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="geCON.php" data-bs-toggle="modal" data-bs-target="#modal_cadastro">Cadastro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="geCON.php" data-bs-toggle="modal" data-bs-target="#modal_listagem">Listagem</a>
                        </li>
                        <li class="nav-item">
                            <a href="../logof.php" class="nav-link">Logof</a>
                        </li>
                        <?php ?>
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
                <a href="#" class="navbar-brand"><?php echo 'Seja bem vindo ' . $_SESSION['nome_logado'] . '!'; ?></a>
            </div>
        </nav>
    </div>
</body>

</html>