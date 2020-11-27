<?
	$realname = $_POST['realname'];
	$CC = $_POST['CC'];
	$Contra = $_POST['Contra'];
	$ReContra = $_POST['ReContra'];
	$reqlen = strlen ($CC) * strlen ($Contra) * strlen ($ReContra);
	if($reqlen > 0){
		if ($Contra === $ReContra){
			require ("connect_db.php")
			$Contra = md5($Contra);
			mysql_query("INSER INTO registro VALUES ('','$realname','$CC','$Contra')");
			mysql_close($link);
			echo 'Se ha registrado exitosamente';
		}else{
			echo 'Por favor, introduzca dos contraseñas identicas'
		}
	} else {
		echo 'Por favor, rellene todos los campos requeridos'
	}
?>