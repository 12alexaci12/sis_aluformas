<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../{$direc_css}">
		<script type="text/javascript" src="js/expreciones_regulares.js"></script>
		<script type="text/javascript" src="js/validar_persona.js"></script>
	</head>
	<body>
		<center>
			<h1>REGISTRAR PERSONA SISTEMA</h1>
			<form action="persona_nuevo1.php" method="post" name="formu">
				<table border="1">
					<tr>
						<th align="right">CI(*)</th>
						<th>:</th>
						<td><input type="text" name="ci" onkeyup="this.value=this.value.toUpperCase()"></td>
					</tr>
					<tr>
						<th align="right">Nombres(*)</th>
						<th>:</th>
						<td><input type="text" name="nombre" onkeyup="this.value=this.value.toUpperCase()"></td>
					</tr>
					<tr>
						<th align="right">Apellido Paterno</th>
						<th>:</th>
						<td><input type="text" name="ap" onkeyup="this.value=this.value.toUpperCase()"></td>
					</tr>
					<tr>
						<th align="right">Apellido Materno</th>
						<th>:</th>
						<td><input type="text" name="am" onkeyup="this.value=this.value.toUpperCase()"></td>
					</tr>
					<tr>
						<th align="right">Direccion</th>
						<th>:</th>
						<td><input type="text" name="direccion" onkeyup="this.value=this.value.toUpperCase()"></td>
					</tr>
					<tr>
						<th align="right">Telefono</th>
						<th>:</th>
						<td><input type="text" name="telefono" onkeyup="this.value=this.value.toUpperCase()" maxlength="9"></td>
					</tr>
					<tr>
						<th align="right">Genero(*)</th>
						<th>:</th>
						<td><input type="radio" name="genero" value="F">Femenino<input type="radio" name="genero" value="M">Masculino</td>
					</tr>
					<tr>
						<td align="center" colspan="3">
							<input type="hidden" name="accion" value="">
							<input type="button" value="Aceptar" onclick="validar();">
							<input type="button" value="Cancelar" onclick="javascript:location.href='personas.php';">
						</td>
					</tr>
				</table>
				<table>
					<tr>
						<td colspan="3" align="center"><b>(*)Campos Obligatorios</b></td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>	