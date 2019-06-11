<?php
    include_once ("conexao.php");


    $Nome = $_POST['NOME'];
  	$Senha = $_POST['SENHA'];
    $Data_Nasc = $_POST['DATA'];
    $pais = $_POST['P'];






  	$conn = mysqli_connect($servidor,$usuario,$senha,$db) or die('erro');

  	$sql = "INSERT INTO pessoas(Nome,senha ,data, pais)
     VALUES ('$Nome', '$Senha','$Data_Nasc', '$pais' )";

  		mysqli_query($conn,$sql) or die("erro cadastro");



  		echo "client cadastro sucesso ";
  		echo "<a href='index.php'>Clique Aqui </a> ";

  		?>



 ?>
