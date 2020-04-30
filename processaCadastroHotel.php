<?php 

	include "bd/conexao.php";

	$nome = isset($_POST['nome']) ? $_POST['nome'] : "";
	$endereco = isset($_POST['endereco']) ? $_POST['endereco'] : "";
	$qtdQuartos = isset($_POST['qtdQuartos']) ? $_POST['qtdQuartos'] : "";
	$qtdGaragens = isset($_POST['qtdGaragens']) ? $_POST['qtdGaragens'] : "";
	$qtdBanheiros = isset($_POST['qtdBanheiros']) ? $_POST['qtdBanheiros'] : "";
	$status = 'desocupado';

	$sql = "INSERT INTO Hoteis VALUES (default, '$nome', '$endereco', '$qtdQuartos', '$qtdGaragens', '$qtdBanheiros', '$status')";
	$query = mysqli_query($conexao, $sql);

	if ($query) {
		header('Location: listarHotel.php');
	} else {
		echo "Erro ao cadastrar";
	}
?>