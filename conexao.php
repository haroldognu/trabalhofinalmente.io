<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$db = "Trabalho";


	$conn = mysqli_connect($servidor,$usuario,$senha);

	if (!$conn) {
		# code...
			echo "Erro";
	}else
	{
		echo "Sucesso";
	}


?>
