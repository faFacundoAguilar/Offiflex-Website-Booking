<?php                               // verificamos si un correo electrónico ya está registrado en una base de datos y, si no lo está,
                                   // inserta un nuevo usuario en la base de datos.
	$realname=$_POST['realname'];
	$mail=$_POST['nick'];
	$pass= $_POST['pass'];

	require("conexion.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
					echo "<script>location.href='registro.php'</script>";	
			}else{
				
				mysqli_query($mysqli,"INSERT INTO login VALUES('','$realname','$pass','$mail','','2')");

				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}


?>

<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=index.html"> 