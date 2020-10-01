<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../{$direc_css}">
		<script type="text/javascript" src="js/expresiones_regulares.js"></script>
		<script type="text/javascript" src="js/validar_perfil.js"></script>
	</head>
	<body>
		<br><br><br><br>
		<center>
			<h2>REGISTRAR EMLEADO</h2>
			<form action="perfil_nuevo1.php" method="post" name="formu">
				<table>
					<tr>
						<th align="right">tipo de perfil (*)</th>
						<th>:</th>
						<td>
							<select name="tipo_perfil">
								<option value="">--- Seleccione---</option>
								{foreach item=r from=$tipo_perfil}
								<option value="{$r.id_tipo_perfil}">{$r.nombre}</option>
								{/foreach}
							</select>
						</td>
					</tr>
					<tr>
						<th align="right">Colores (*)</th>
						<th>:</th>
						<td>
							<select name="color">
								<option value="">--- Seleccione---</option>
								{foreach item=r from=$colores}
								<option value="{$r.id_color}">{$r.nombre}</option>
								{/foreach}
							</select>
						</td>
					</tr>
					<tr>
						<th align="right">Linea de Perfil (*)</th>
						<th>:</th>
						<td>
							<select name="linea_perfil">
								<option value="">--- Seleccione---</option>
								{foreach item=r from=$linea_perfil}
								<option value="{$r.id_linea_perfil}">{$r.linea}</option>
								{/foreach}
							</select>
						</td>
					</tr>
	                    <tr>
	                        <th align="left">largo(*)</th>
	                        <th>:</th>
	                        <td><input type="text" name="largo"></td>
	                    </tr>
					<tr>
						<th align="left">precio de perfil(*)</th>
						<th>:</th>
						<td><input type="text" name="precio"></td>
					</tr>
					<tr>
						<td align="center" colspan="3">
							<input type="hidden" name="accion" value="">
							<input type="button" value="Aceptar" onclick="validar();">
							<input type="button" value="Cancelar" onclick="javascript:location.href='perfiles.php';">
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
