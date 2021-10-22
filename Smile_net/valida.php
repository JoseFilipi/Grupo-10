<?php

//iniciando a sessão e incluindo o banco de dados
session_start();
include_once("conexao.php");

//averiguando o botão de login
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);

//permissões de segurança de login(apenas logar caso o botão seja pressionado e todos os campos sejam preenchidos corretamente)
if($btnLogin){
    
    //caso o botão seja pressionado o código a seguir irá receber a cpf/cnpj e senha e salvar em variáveis PHP
	$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	
	if((!empty($cpf)) AND (!empty($senha))){
		
		//Caso ambos campos estejam preenchidos será feita a busca dos dados presentes na mesma linha do banco que possui cpf indicado no login
		$result_usuario = "SELECT nome, nascimento, rg, cpf, cep, telefone, email, senha, plano, numplano, foto FROM pacientes WHERE cpf='$cpf' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			
			//caso a senha digitada seja igual a senha presente no banco as informações que foram resgatadas são salvas em variáveis globais, que podem ser compartilhadas entre páginas .php através da função session_start()
			if(password_verify($senha, $row_usuario['senha'])){
				$_SESSION['nome'] = $row_usuario['nome'];
				$_SESSION['nascimento'] = $row_usuario['nascimento'];
				$_SESSION['rg'] = $row_usuario['rg'];
				$_SESSION['cpf'] = $row_usuario['cpf'];
				$_SESSION['cep'] = $row_usuario['cep'];
				$_SESSION['telefone'] = $row_usuario['telefone'];
				$_SESSION['email'] = $row_usuario['email'];
			    $_SESSION['plano'] = $row_usuario['plano'];
			    $_SESSION['numplano'] = $row_usuario['numplano'];
			    $_SESSION['foto'] = $row_usuario['foto'];

                //após salvar as variáveis globais o usuário será direcionado à página privada
				header("Location: areaPrivada_pf.php");

			} else{
				$_SESSION['msg'] = "Login e senha incorreto!";
				header("Location: logar.php");

			
			}
		}
	}else{
		$_SESSION['msg'] = "Login e senha incorreto! (vazio)";
		header("Location: logar.php");
	}
}else{
	$_SESSION['msg'] = "Página não encontrada";
	header("Location: logar.php"); 
}
