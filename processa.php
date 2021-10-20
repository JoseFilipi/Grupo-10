<?php
session_start();
include_once("conexao.php");

$nomesobrenome = filter_input(INPUT_POST, 'nomesobrenome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);
$forma = filter_input(INPUT_POST, 'forma', FILTER_SANITIZE_STRING);
$horario = filter_input(INPUT_POST, 'horario', FILTER_SANITIZE_STRING);
$receber = filter_input(INPUT_POST, 'receber', FILTER_SANITIZE_STRING);



//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO contato (nomesobrenome, email, telefone, mensagem, forma, horario, receber, created) VALUES ('$nomesobrenome', '$email', '$telefone', '$mensagem', '$forma', '$horario', '$receber', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: contato.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: contato.php");
}
