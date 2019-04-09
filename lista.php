<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Lista de Cadastrados</title>
</head>

<body class="container">

	<?php 

		

		//criar comando sql

		$sql = "SELECT nome, sobrenome, data, email, cpf FROM tb_cadastro";
		

		// executar o comando

		$resultado = mysqli_query($conn, $sql);

		// verificar se a consulta retornou algum registro

		if(mysqli_affected_rows($conn) > 0)
		{
			// criar array para receber dados da tabela

			$registro = array();

				//montamos a parte inicial da tabela
			echo '<table class ="table table-striped">' ; 
				echo '<thead class="thead-dark">';
					echo '<tr>';
						echo '<th>Nome:   </th>';
						echo '<th>Sobrenome:   </th>';
						echo '<th>Data de Nascimento:   </th>';
						echo '<th>E-mail:   </th>';
						echo '<th>CPF: </th>';
					echo '</tr>';
				echo '</thead>';	

			//enquanto houverem registros em 'resultado'
			//copie cada registro para uma posição do 
			// array 'registros'

			while ($registros = mysqli_fetch_assoc($resultado))

			{
				// criar forech para percorrer posição atual de 'registros'
				echo '<tr>';
				foreach($registros as $indice => $valor)
				{
					echo  "<td> " . $valor . '</td>';
				}
				echo '</tr>';

			}

			echo '</table>';
				// fecha a conexão 
				mysqli_close($conn);
		}
		else if(mysqli_affected_rows($conn)==0)
		{
			echo '<h3 Não há usuarios cadastrados ainda!</h3>';
		}
		else
		{
			echo '<h3 Erro ao buscar dados na tabela<br>
			Detalhe do erro: '. mysqli_error($conn).'</h3>';
		}


	?>

</body>
</html>