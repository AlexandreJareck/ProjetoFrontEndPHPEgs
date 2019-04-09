<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Cadastrado</title>
</head>
<body class="container">

	<?php 
	include 'menu.php';

		if(isset($_POST['btn-cadastrar']) && 
			!empty($_POST['nome']) && 
			!empty($_POST['sobrenome']) && 
			!empty($_POST['email']) ){

			//receber os dados do form
			$nome = $_POST['nome'];
			$sobrenome = $_POST['sobrenome'];
			$data = $_POST['data'];
			$email = $_POST['email'];
			$cpf = $_POST['cpf'];


			//incluir arquivo de conexão
			 
			include 'conn.php';


			//criar comando sql
			$sql = "INSERT INTO tb_cadastro (nome, sobrenome, data, email, cpf) VALUES ('$nome',
			'$sobrenome', '$data', '$email', '$cpf') ";


			// executar comando sql: 
			$resultado = mysqli_query($conn, $sql);

			//verificar se o comando foi executado com sucesso 

			if($resultado){
				include 'lista.php';

				
			}else{
			echo '<h3>Erro ao cadastrar cliente!</h3>';
			}	

		}else{
			echo '<h3>Por favor, preencha o formulário de cadastro</h3><br>';
			include 'form_cadastro.php';
		}
	?>
	</body>
	</html>