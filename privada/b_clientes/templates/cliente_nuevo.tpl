<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../{$direc_css}">
		<script type="text/javascript" src="js/expresiones_regulares.js"></script>
		<script type="text/javascript" src="js/validar_cliente.js"></script>
	</head>
	<body>
		<br><br><br><br>
		<center>
			<h2>REGISTRAR CLIENTE</h2>
			<form action="cliente_nuevo1.php" method="post" name="formu">
				<table>
					<th align="right">Banco (*)</th>
					<th>:</th>
					<td>
						<select name="id_banco">
							<option value="">--- Seleccione---</option>
							{foreach item=r from=$bancos}
							<option value="{$r.id_banco}">{$r.nombre}</option>
							{/foreach}
						</select>
					</td>
	                    <tr>
	                        <th align="left">Nombres(*)</th>
	                        <th>:</th>
	                        <td><input type="text" name="nombre" onkeyup="this.value=this.value.toUpperCase()"></td>
	                    </tr>
                         <tr>
                              <th align="left">ci</th><th>:</th>
                              <td> <input type="text" name="ci" onkeyup="this.value=this.value.toUpperCase()"> </td>
                         </tr>
                         <tr>
                              <th align="left">A Paterno</th><th>:</th>
                              <td> <input type="text" name="ap" onkeyup="this.value=this.value.toUpperCase()"> </td>
                         </tr>
                         <tr>
                              <th align="left">A Materno</th><th>:</th>
                              <td> <input type="text" name="am" onkeyup="this.value=this.value.toUpperCase()"> </td>
                         </tr>
					<tr>
						<th align="left">Telefono</th>
						<th>:</th>
						<td><input type="text" name="telefono" onkeyup="this.value=this.value.toUpperCase()" maxlength="9"></td>
					</tr>
					<tr>
						<th align="left">Direccion(*)</th>
						<th>:</th>
						<td><input type="text" name="direccion" onkeyup="this.value=this.value.toUpperCase()"></td>
					</tr>
					<tr>
						<td align="center" colspan="3">
							<input type="hidden" name="accion" value="">
							<input type="button" value="Aceptar" onclick="validar();">
							<input type="button" value="Cancelar" onclick="javascript:location.href='clientes.php';">
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
