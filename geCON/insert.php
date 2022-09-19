
<?php
require_once '../db/db.php';

    $nome = $_POST ['nome'];
    $data = $_POST ['data_nasc'];
    $estado_civil = $_POST['estado_civil'];
    $foto = "https://bootdey.com/img/Content/avatar/avatar7.png";
if(isset($_POST['nome'])){
    $insert = "INSERT INTO cliente (nome, data_nasc, estado_civil, imagem, status) VALUES ('".$nome."', '".$data."', '".$estado_civil."', '".$foto."', 1)";
    //$insetDadosCliente = "INSERT INTO dadoscliente(idcliente, imagem) values('".."','".."'); 
    $insertDb = $conn->query($insert);}
    header('Location: geCON.php')

?>