
<?php
                 //aca creo un nuevo objeto MySQLi utilizando el constructor de la clase MySQLi


		$mysqli = new MySQLi("localhost", "root","", "login");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error()); //verifica si la conexión a la base de datos fue exitosa.
		}
		else

?>