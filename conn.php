<?php 

// constantes de conexão

define('SERVERNAME', 'localhost'); //servidor
define('USERNAME', 'root'); //usuario
define('PASSWORD', ''); // senha
define('DBNAME', 'bd_usuario'); // banco de dados


$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

//chega a conexão

if(!$conn)

{
	die("Erro ao conectar: " . mysqli_connect_error($conn));   // die mata a conexão, anula.

}


?>