<?php

	include_once "bd/conexao.php";

	$nome = isset($_POST['nome']) ? $_POST['nome'] : "";
	$endereco = isset($_POST['endereco']) ? $_POST['endereco'] : "";
	$qtdQuartos = isset($_POST['qtdQuartos']) ? $_POST['qtdQuartos'] : "";
	$qtdGaragens = isset($_POST['qtdGaragens']) ? $_POST['qtdGaragens'] : "";
	$qtdBanheiros = isset($_POST['qtdBanheiros']) ? $_POST['qtdBanheiros'] : "";
	$id = isset($_POST['id']) ? $_POST['id'] : "";

	$sql = "UPDATE Hoteis SET `nome` = '$nome', `endereco` = '$endereco', `qtdQuartos` = '$qtdQuartos', `qtdGaragens` = '$qtdGaragens', `qtdBanheiros` = '$qtdBanheiros' WHERE id = $id";
	$query = mysqli_query($conexao, $sql);

	if ($query) {
		header("Location:listarHotel.php");
	}

?>