<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../{$direc_css}">
		<script type="text/javascript" src="js/expresiones_regulares.js"></script>
		<script type="text/javascript" src="js/validar_banco.js"></script>
	</head>
	<body>
		<br><br><br><br>
		<center>
			<h2>REGISTRAR BANCOS</h2>
			<form action="banco_nuevo1.php" method="post" name="formu">
				<table>
	                    <tr>
	                        <th align="left">Nombres(*)</th>
	                        <th>:</th>
	                        <td><input type="text" name="nombre" onkeyup="this.value=this.value.toUpperCase()"></td>
	                    </tr>
					<tr>
						<th align="left">Telefono</th>
						<th>:</th>
						<td><input type="text" name="telefono" maxlength="9"></td>
					</tr>
					<tr>
						<th align="left">Direccion(*)</th>
						<th>:</th>
						<td><input type="text" name="direccion" onkeyup="this.value=this.value.toUpperCase()"></td>
					</tr>
					<tr>
						<th align="left">URL(*)</th>
						<th>:</th>
						<td><input type="text" name="url" onkeyup="this.value=this.value.toUpperCase()"></td>
					</tr>
					<tr>
						<td align="center" colspan="3">
							<input type="hidden" name="accion" value="">
							<input type="button" value="Aceptar" onclick="validar();">
							<input type="button" value="Cancelar" onclick="javascript:location.href='bancos.php';">
						</td>
					</tr>
					<tr>
						<td colspan="3" align="center"><b>(*)Campos Obligatorios</b></td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>
