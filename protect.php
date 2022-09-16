<?php 
$sessao = 0;
session_start();
if(isset($_SESSION['sessiontime'])){
    if($_SESSION['sessiontime'] < time()){
        session_unset();
        $_SESSION['retorno_login'] = 'Seu tempo de sessão expirou! Logue novamente!';
        $sessao = 0;
    }else{
        $_SESSION['sessiontime'] = time() + 300;
        $sessao = 1;
    }
}else{
    session_unset();
    $_SESSION['retorno_login'] = 'TESTE';
    $sessao = 0;
}
?>