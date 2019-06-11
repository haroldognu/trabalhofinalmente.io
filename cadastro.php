<?php
	include_once=("conexao.php");

		$nome = $_POST['nome'];
	$senha = $_POST['senha'];

	$conn = mysqli_connect($servidor,$Usuario,$Senha,$db) or die('erro');

	$sql = "INSERT INTO usuario(nome,senha) VALUES ('$nome', '$senha')";	
		
		mysqli_query($conn,$sql) or die("erro cadastro");

	

		echo "client cadastro sucesso ";
		echo "<a href='index.php'>Clique Aqui </a> ";

		?>

?>