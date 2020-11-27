<?php
	$link = mysqli_connect('localhost','root','', 'licoreria')or die ('Error en la conexion');
	$sql = "INSERT INTO registro VALUES (null, '".$POST["realname"]."', '".$POST["CC"]."','".$POST["Contra"]."')";
	$resultado = mysqli_query($link,$sql) or die ('Error en el query dabase');
	mysqli_close($link);
?>