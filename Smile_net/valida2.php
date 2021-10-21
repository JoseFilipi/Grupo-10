<?php

//iniciando a sessão e incluindo o banco de dados
session_start();
include_once("conexao.php");

//averiguando o botão de login
$btnLogin2 = filter_input(INPUT_POST, 'btnLogin2', FILTER_SANITIZE_STRING);

//permissões de segurança de login(apenas logar caso o botão seja pressionado e todos os campos sejam preenchidos corretamente)
if($btnLogin2){
    
    //caso o botão seja pressionado o código a seguir irá receber a cpf/cnpj e senha e salvar em variáveis PHP
	$cnpj = filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha2', FILTER_SANITIZE_STRING);
	
	if((!empty($cnpj)) AND (!empty($senha))){
		

		//Caso ambos campos estejam preenchidos será feita a busca dos dados presentes na mesma linha do banco que possui cpf indicado no login
		$result_usuario = "SELECT nome, cnpj, cep, endereco, telefone, horariofunc, email, senha, logo, descricao FROM clinicas WHERE cnpj='$cnpj' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			
			//caso a senha digitada seja igual a senha presente no banco as informações que foram resgatadas são salvas em variáveis globais, que podem ser compartilhadas entre páginas .php através da função session_start()
			if(password_verify($senha, $row_usuario['senha'])){
				$_SESSION['nome'] = $row_usuario['nome'];
				$_SESSION['cnpj'] = $row_usuario['cnpj'];
				$_SESSION['cep'] = $row_usuario['cep'];
				$_SESSION['endereco'] = $row_usuario['endereco'];
				$_SESSION['telefone'] = $row_usuario['telefone'];
				$_SESSION['horariofunc'] = $row_usuario['horariofunc'];
				$_SESSION['email'] = $row_usuario['email'];
				$_SESSION['logo'] = $row_usuario['logo'];
				$_SESSION['descricao'] = $row_usuario['descricao'];
				
				//após salvar as variáveis globais o usuário será direcionado à página privada
				header("Location: areaPrivada_pj.php");

			} else{
				$_SESSION['msg2'] = "Login e senha incorreto!";
				header("Location: logar.php");

			
			}
		}
	}else{
		$_SESSION['msg2'] = "Login e senha incorreto! (vazio)";
		header("Location: logar.php");
	}
}else{
	$_SESSION['msg2'] = "Página não encontrada";
	header("Location: logar.php"); 
}
