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
    $data = $_POST ['data_nasc'];
    $estado_civil = $_POST['estado_civil'];

    $insert = "INSERT INTO cliente (nome, data_nasc, estado_civil, status) VALUES ('".$nome."', '".$data."', '".$estado_civil."', 1)";
    //$insetDadosCliente = "INSERT INTO dadoscliente(idcliente, imagem) values('".."','".."'); 
    $insertDb = $conn->query($insert);

?>