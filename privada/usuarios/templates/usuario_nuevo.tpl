<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../{$direc_css}">
		<script type="text/javascript" src="js/expreciones_regulares.js"></script>
		<script type="text/javascript" src="js/validar_usuario.js"></script>
	</head>
	<body>
		<center>
			<h1>REGISTRAR USUARIO</h1>
			<form action="usuario_nuevo1.php" method="post" name="formu">
				<table border="1">
					<tr>
						<th align="right">Persona (*)</th>
						<th>:</th>
						<td> 
							<select name="id_persona">
								<option value="">--- Seleccione---</option>
								{foreach item=r from=$personas}
								<option value="{$r.id_persona}">{$r.ap}-{$r.am}-{$r.nombre}</option>
								{/foreach}
							</select>
						</td>
					</tr>
					<tr>
						<th align="right">Usuario (*)</th>
						<th>:</th>
						<td><input type="text" name="usuario1"></td>
					</tr>
					<tr>
						<th align="right">Clave (*)</th>
						<th>:</th>
						<td><input type="password" name="clave"></td>
					</tr>
					<tr>
						<td align="center" colspan="3">
							<input type="hidden" name="accion" value="">
							<input type="button" value="Aceptar" onclick="validar();">
							<input type="button" value="Cancelar" onclick="javascript:location.href='usuarios.php';">
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