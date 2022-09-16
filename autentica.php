<?php 
define('ROOT_PATH', dirname(__FILE__));
require_once ROOT_PATH . "/db/db.php";


$login = isset($_POST['login']) ? addslashes(trim($_POST['login'])) : FALSE;
$senha = isset($_POST['senha']) ? md5(trim($_POST['senha'])) : FALSE;

$sql = 'SELECT id, email, nome, senha, STATUS FROM users WHERE email = "'.$login.'" AND senha = "'.$senha.'" and STATUS = 1;';
$pesquisar = $conn->query($sql);
$array = $pesquisar->fetch_assoc();
if(!$pesquisar->num_rows > 0){
    echo "usuario inválido!";
    header('Location: index.php');
}else{
    session_start();
    $_SESSION['id_logado'] = $array['id'];
    $_SESSION['nome_logado'] = $array['nome'];
    header( 'Location: ./geCON/geCON.php');
}
?>

<?php
/*
if(!$linhas > 0){
    echo 'Usuário ou senha inválidos!';
    header('index.php');
}
else{
    session_start();    
    $_SESSION['usuario_logado'] = $array['id'];
    header('Location: geCON/geCON.php');
}
*/