<?php 
require_once('../db/db.php');

$idUpdate               = $_POST['idUpdate'];
$upNome                 = $_POST['nome'];
$upDataNasc             = $_POST['data_nasc'];
$upFoto                 = $_POST['foto'];

$sql1 = 
'UPDATE cliente 
SET nome                = "'.$upNome.'", 
data_nasc               ="'.$upDataNasc.'", 
imagem                  ="'.$upFoto.'" 
WHERE id                ="'.$idUpdate.'"';

$update                 = $conn->query($sql1);
header('edita.php');
?>