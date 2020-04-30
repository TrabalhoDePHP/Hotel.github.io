<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro hotel</title>
	<meta charset="utf-8">
</head>
<body>
	<div class="container">
		<form action="processaCadastroHotel.php" method="POST">
			<label>Nome</label>
			<input name="nome" autocomplete="off">
				<br>
			<label>Endereço</label>
			<input name="endereco" autocomplete="off">
				<br>
			<label>Quantidade de quartos</label>
			<input type="number" name="qtdQuartos" autocomplete="off">
				<br>
			<label>Quantidade de garagens</label>
			<input type="number" name="qtdGaragens" autocomplete="off">
				<br>
			<label>Quantidade de banheiros</label>
			<input type="number" name="qtdBanheiros" autocomplete="off">
				<br>
			<button type="submit">Cadastrar</button>
		</form>
	</div>
</body>
</html>