<?php
    session_start();
    if(!isset($_SESSION['id_logado'])){
        header("index.php");
    }else{
        header("Location: ./geCON/geCON.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="login.js"></script>
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>

<body>
    <div class="login">
        <div id="login_card">
            <h1>Gecon</h1>
            <img src="user-profile.png" width="55%" srcset="">
            <form action="autentica.php" method="post">
                <label for="email" style="display: none;">Email</label>
                <input class="email" name="login" type="email" id="login" placeholder="Email ou telefone">
                <label for="pass" style="display: none;">Senha</label>
                <input type="password" name="senha" id="senha" placeholder="Senha">
                <button type="submit" name="acao">Entrar</button>
            </form>
            <br>
            <button class="new_button">Criar nova conta</button>
            <br>
            <br>
            <button class="new_button">Esqueci minha senha</button>
            <br>
            <br>

        </div>
    </div>
</body>

</html>