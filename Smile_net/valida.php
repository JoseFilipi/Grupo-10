<?php
session_start();

include_once("conexao.php");

$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);

if($btnLogin){

	$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	if((!empty($cpf)) AND (!empty($senha))){
		
		$result_usuario = "SELECT senha FROM pacientes WHERE cpf='$cpf' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			
			if(password_verify($senha, $row_usuario['senha'])){
				header("Location: areaPrivada_pf.php");

			} else{
				$_SESSION['msg'] = "Login e senha incorretos!";
				header("Location: logar.php");
				
			}
		}
	}else{
		$_SESSION['msg'] = "Login e senha incorretos! (vazio)";
		header("Location: logar.php");
		
	}
}else{
	$_SESSION['msg'] = "Página não encontrada";
	header("Location: logar.php");
}
