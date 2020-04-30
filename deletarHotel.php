<?php

	include_once "bd/conexao.php";

	$id = $_GET['id'];

	$sql = "DELETE FROM Hoteis WHERE id = $id";
	$query = mysqli_query($conexao, $sql);

	if ($query) {
		header("Location:listarHotel.php");
	}

?>