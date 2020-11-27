<!DOCTYPE html>
<html>
     <head>
		<title > Formulario de registro  </title>
     </head>

     <body  style = " background: url('Licoreria.jpg'); backgrond-size: cover;">
		<center>  
		<h1 aling = "center" style ="color: white;"> <font Face = "Cosmic"; size ="10" > Formulario de registo de la licoreria </font></h1>
		
		<form method= "POST" action = "connect_db.php">
			<table>
				<tr style ="color: white;">
					<td>
						<font Face = "Cosmic"; size ="5"> Nombre y apellidos </font>
					</td>
					<td>
						<input type = "name"  name ="realname"/>
					</td>
				</tr>
				
				<tr style ="color: white;">
					<td>
						<font Face = "Cosmic"; size ="5" > Cedula de Ciudadania </font>
					</td>
					<td>
						<input type = "name"  name ="CC"/>
					</td>
				</tr>
				
				<tr style ="color: white;">
				 
					<td>
						<font Face = "Cosmic"; size ="5" >Contraseña </font>
					</td>
					<td>
						<input type = "Password"  name ="Contra"/>
					</td>
				</tr>
				
				<tr style ="color: white;">
					<td>
						<font Face = "Cosmic"; size ="5" >Repetir Contraseña </font>
					</td>
					<td>
						<input type = "Password"  name ="ReContra"/>
					</td>
				</tr>
				
			</table>
			<input type = "submit" name = "submit" value = "Registrar"/> <input type = "reset">
		</form>
		<?php 
			if (isset($_POST ['SUMBIT'])){
				requiere("registro.php");
			}
		?>
		</center>
     </body>
<html>