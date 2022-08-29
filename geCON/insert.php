<html>
<link rel="stylesheet" href="style.css">
<body>
    <div>
        <head>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="select.php">Listagem</a></li>
            </ul>
        </head>
    </div>
</body>
    

</html>

<?php
require_once '../db/db.php';

    $nome = $_POST ['nome'];
    $email = $_POST ['email'];
    $contato = $_POST ['contato'];
    $idade = $_POST['idade'];
    $estado_civil = $_POST['estado_civil'];

    $insert = "INSERT INTO users (nome, email, contato, idade, estado_civil, status) VALUES ('$nome','$email','$contato', '$idade', '$estado_civil', 1);"; 
    $insertDb = $conn->query($insert);
    header('location:geCON.php');

?>