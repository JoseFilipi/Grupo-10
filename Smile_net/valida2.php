<?php
session_start();

include_once("conexao.php");

$btnLogin2 = filter_input(INPUT_POST, 'btnLogin2', FILTER_SANITIZE_STRING);

if($btnLogin2){

	$cnpj = filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha2', FILTER_SANITIZE_STRING);

	if((!empty($cnpj)) AND (!empty($senha))){
		
		$result_usuario = "SELECT senha FROM clinicas WHERE cnpj='$cnpj' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			
			if(password_verify($senha, $row_usuario['senha'])){
				
				header("Location: areaPrivada_pj.php");

			} else{
				$_SESSION['msg2'] = "Login e senha incorretos!";
				header("Location: logar.php");

			
			}
		}
	}else{
		$_SESSION['msg2'] = "Login e senha incorretos! (vazio)";
		header("Location: logar.php");
	}
}else{
	$_SESSION['msg2'] = "Página não encontrada";
	header("Location: logar.php"); 
}
