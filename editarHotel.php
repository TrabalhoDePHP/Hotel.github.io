<?php $id = $_GET['id'] ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="c1 container mt-3">
		<form method="post" action="atualizarHotel.php">

			<?php

			include_once "bd/conexao.php";

			$sql = "SELECT * FROM Hoteis WHERE id = $id";
			$query = mysqli_query($conexao, $sql);

			while($row = mysqli_fetch_array($query)) {
				$id = $row['id'];
				$nome = $row['nome'];
				$endereco = $row['endereco'];
				$qtdQuartos = $row['qtdQuartos'];
				$qtdGaragens = $row['qtdGaragens'];
				$qtdBanheiros = $row['qtdBanheiros'];
				$status = $row['status'];

				?>

					<label>Nome</label>
					<input name="nome" value="<?php echo $nome ?>" autocomplete="off">
					<br>
					<label>Endereço</label>
					<input name="endereco" value="<?php echo $endereco ?>" autocomplete="off">
					<br>
					<label>Quantidade de quartos</label>
					<input type="number" value="<?php echo $qtdQuartos ?>" name="qtdQuartos" autocomplete="off">
					<br>
					<label>Quantidade de garagens</label>
					<input type="number" value="<?php echo $qtdGaragens ?>" name="qtdGaragens" autocomplete="off">
					<br>
					<label>Quantidade de banheiros</label>
					<input type="number" value="<?php echo $qtdBanheiros ?>" name="qtdBanheiros" autocomplete="off">
					<br>



					<input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">

			<?php } ?>
				<button type="submit" class="btn btn-success btn-sm">Atualizar</button>
		</form>
	</div>
</body>
</html>