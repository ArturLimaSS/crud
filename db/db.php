<?php
    $servername = 'localhost';
    $username = 'root';
    $pass = '2609';
    $db = 'crudPHP';
    $conn = new mysqli($servername, $username, $pass, $db);

    if ($conn->connect_error){
        die("Connecetio failed:".$conn->connect_error);
    }
    echo "";
#PESQUISA TODOS OS DADOS PARA A LISTAGEM
    $queryTodosOsDados = "SELECT u.id, u.nome, u.email, u.contato, u.idade, ec.`descricao` FROM users u JOIN estado_civil ec ON u.`estado_civil` = ec.`id` WHERE u.status = '1';";
    $pesquisarTodosOsDados = $conn->query($queryTodosOsDados);
#PESQUISA ESTADO CIVIL
    $queryEstadoCivil = mysqli_query($conn, "select id, descricao from estado_civil;");
    
?>