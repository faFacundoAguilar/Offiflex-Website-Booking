
<?php
                                  // este fragmento es  para conectar PHP a  base de datos MySQL "reservas".


		$mysqli = new MySQLi("localhost", "root","", "reservas");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else

?>