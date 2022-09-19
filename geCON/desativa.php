<?php 

//function edita($id){
    //require_once '../db/db.php';
    //$idCliente = $id;
    //if(isset($idCliente))
    //$update = ('UPDATE cliente SET nome = '.$nome.', data_nasc = '.$data_nasc.' WHERE id = '.$idCliente.';');
  //  $registra = $conn->query($update);
//};

    $idCliente = $_POST['idCliente'];
    require_once '../db/db.php';
    if (isset($idCliente)) {
    $update = ('UPDATE cliente SET status = 0 where id ='.$idCliente.';');
    $sql = $conn->query($update);
    header("Location: geCON.php");}
?>