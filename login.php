<?php
session_start();
include('conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: logindocente.php');
	exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select email from docentes where email = '{$email}' and (senha = '{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['email'] = $email;
	header('Location: painelDocente.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: loginDocente.php');
	exit();
}
?>
