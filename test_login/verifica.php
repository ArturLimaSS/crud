<?php
require_once '../db/db.php';

$login = isset($_POST['login']) ? addslashes(trim($_POST['login'])) : FALSE;
$senha = isset($_POST['senha']) ? md5(trim($_POST['senha'])) : FALSE;

$sql = 'SELECT id, email, nome, senha FROM users WHERE email = "'.$login.'" AND senha = "'.$senha.'";';
$pesquisar = $conn->query($sql);
$array = mysqli_fetch_assoc($pesquisar);
echo $array['nome'];