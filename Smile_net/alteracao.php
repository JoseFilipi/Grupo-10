<?php

    //iniciando a sessão e incluindo o banco de dados
    session_start();
    include_once("conexao.php");
    
    //salvando cpf em uma variável comum para buscar dados no banco através da SQL
    $cpf = $_SESSION['cpf'];
    
    //Inclusão da conexão com o banco de dados e coleta de todas as informações na mesma linha do cpf salvo na variável acima
    $result_usuario = "SELECT * FROM cadsa WHERE cpf='$cpf'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $row_usuario = mysqli_fetch_assoc($resultado_usuario);
    $id= $row_usuario['id']; //capturando o id da tabela onde cpf é igual ao fornecido no login

   //salvando as variáveis presentes no banco em PHP para mostrar no formulário
   $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
   $rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
   $cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
   $cel = filter_input(INPUT_POST, 'cel', FILTER_SANITIZE_STRING);
   $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
   $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
   $plano = filter_input(INPUT_POST, 'textoplano', FILTER_SANITIZE_STRING);
   $numplano = filter_input(INPUT_POST, 'carteirinha', FILTER_SANITIZE_STRING);
   $foto = $_FILES['foto']['name'];
    
    //caso a senha digitada seja igual a senha do banco será iniciada a mudança dos dados
    if(password_verify($senha, $row_usuario['senha'])){

   // lógica de programação para salvar a imagem
  
  //Pasta onde o arquivo vai ser salvo
  $_UP['pasta'] = 'fotoperfil/';
  
  //Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
  $nome_final = time().'.jpg';
  
  //Movendo a foto
  move_uploaded_file($_FILES['foto']['tmp_name'], $_UP['pasta']. $nome_final);
  
  
  $result_usuario = "UPDATE cadsa SET nome='$nome', rg='$rg', cep='$cep', telefone='$cel', email='$email', plano='$plano', numplano='$numplano', foto='$nome_final' WHERE id = '$id'";
  $resultado_usuario = mysqli_query($conn, $result_usuario);
  
  header("Location: AlterarDadosPF.php");

  } else{
        $_SESSION['msg3'] = "senha incorreta";
        
        header("Location: AlterarDadosPF.php");

      
      }
?>