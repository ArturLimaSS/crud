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
#PESQUISA TODOS OS DADOS PARA A LISTAGEM DE USUÁRIOS
    $queryTodosOsDados = "SELECT id, nome, email, senha FROM users WHERE STATUS = 1;";
    $pesquisarTodosOsDados = $conn->query($queryTodosOsDados);
#PESQUISA TODOS OS DADOS DOS CLIENTES:
    $queryPesquisaClientes = "SELECT c.`id`, c.`nome`, c.`data_nasc`, ec.id as 'estadoCivil', ec.`descricao` FROM cliente c JOIN estado_civil ec ON c.`estado_civil` = ec.`id` WHERE c.`status` = 1;";
    $pesquisarCliente = $conn->query($queryPesquisaClientes);
#PESQUISA ESTADO CIVIL
    $selectEstado = "select id, descricao from estado_civil;";
    $queryEstadoCivil = $conn->query($selectEstado);
    
?>