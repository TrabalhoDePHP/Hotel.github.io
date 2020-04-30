
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table class="table" border='1'>
		<thead>
			<tr>
				<th>#</th>
				<th>nome hotel</th>
				<th>endereço</th>
				<th>qtdQuartos</th>
				<th>qtdGaragens</th>
				<th>qtdBanheiros</th>
				<th>status</th>
				<th>Ação</th>
			</tr>
		</thead>
		<tbody>

			<?php 

			include "bd/conexao.php";

			$sql = "SELECT * FROM Hoteis";
			$query = mysqli_query($conexao, $sql);

			while ($row = mysqli_fetch_array($query)) {
				$id = $row['id'];
				$nome = $row['nome'];
				$endereco = $row['endereco'];
				$qtdQuartos = $row['qtdQuartos'];
				$qtdGaragens = $row['qtdGaragens'];
				$qtdBanheiros = $row['qtdBanheiros'];
				$status = $row['status'];

				echo "<tr>";
				echo "<td>$id</td>";
				echo "<td>$nome</td>";
				echo "<td>$endereco</td>";
				echo "<td>$qtdQuartos</td>";
				echo "<td>$qtdGaragens</td>";
				echo "<td>$qtdBanheiros</td>";
				echo "<td>$status</td>";

				echo "<td>";
					echo "<a href='editarHotel.php?id=$id' role='button'>Editar</a>";
					echo " | ";  
					echo "<a href='deletarHotel.php?id=$id' role='button'>deletar</a>";
				echo "</td>";

				echo "</tr>";
			}
			?>

		</tbody>
	</table>
</body>
</html>


