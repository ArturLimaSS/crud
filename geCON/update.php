<?php 
require_once('../db/db.php');

$idUpdate                    = $_POST['idEdita'];
$upNome                      = $_POST['nome'];
$upDataNasc                  = $_POST['data_nasc'];
$upFoto                      = $_POST['foto'];
if(isset($idUpdate)){
$sql =         
'UPDATE cliente         
SET nome                     = "'.$upNome.'", 
data_nasc                    = "'.$upDataNasc.'", 
imagem                       = "'.$upFoto.'" 
WHERE id                     = "'.$_POST['idEdita'].'"';

$update                      = $conn->query($sql);
header('Location: geCON.php');
};
