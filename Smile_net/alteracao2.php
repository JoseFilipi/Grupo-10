<?php
    //iniciando a sessão e incluindo o banco de dados
    session_start();
    include_once("conexao.php");
    
    //salvando cnpj em uma variável comum para buscar dados no banco através da SQL
    $cnpj = $_SESSION['cnpj'];
    
    //Inclusão da conexão com o banco de dados e coleta de todas as informações na mesma linha do cnpj salvo na variável acima
    $result_usuario = "SELECT * FROM clinicas WHERE cnpj='$cnpj'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $row_usuario = mysqli_fetch_assoc($resultado_usuario);
    $id= $row_usuario['id'];//capturando o id da tabela onde cnpj é igual ao fornecido no login

   //salvando as variáveis presentes no banco em PHP para mostrar no formulário
   $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
   $cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
   $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
   $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
   $horariofunc = filter_input(INPUT_POST, 'horariofunc', FILTER_SANITIZE_STRING);
   $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
   $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
   //$foto = $_FILES['foto']['name'];
  // $descric = filter_input(INPUT_POST, 'desc', FILTER_SANITIZE_STRING);
    
     //caso a senha digitada seja igual a senha do banco será iniciada a mudança dos dados
    if(password_verify($senha, $row_usuario['senha'])){
	
	
	$result_usuario = "UPDATE clinicas SET nome='$nome', cep='$cep', endereco='$endereco', telefone='$telefone', horariofunc='$horariofunc', email='$email' WHERE id = '$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	
	header("Location: AlteraDadosBasicosPJ.php");

	} else{
				$_SESSION['msg3'] = "senha incorreta";
				
				header("Location: AlteraDadosBasicosPJ.php");

			
			}
?>