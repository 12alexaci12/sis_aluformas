<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css" >
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<div class="normal">
			<br><br><br><br>
			<table width="100%" border="0">
				<tr>
					<td width="33%">
						<table border="0">
							<tr>
							</tr>
						</table>
					</td>
					<td align="center" width="33%">
						<h2>Empleados</h2>
					</td>
					<td align="left" width="33%">
						<form name="formNuevo" method="post" action="empleado_nuevo.php">
							<a href="javascript:document.formNuevo.submit();">
							Nuevo>>>>
							</a>
						</form>
					</td>
				</tr>
			</table>
		</div>
		<div class="listado">
		<center>
			<table>
				<thead>
					<tr>
						<th>NRO</th><th>nombre</th><th>ci</th><th>telefono</th>
						<th><img src="../../imagenes/modificar.gif"></th><th><img src="../../imagenes/borrar.jpeg"></th>
					</tr>
				</thead>
				{assign var="b" value="1"}
				{foreach item=r from=$empleados}
				<tr>
                    <td>{$b}</td>
					<td>{$r.nombre}</td>
					<td>{$r.ci}</td>
					<td>{$r.telefono}</td>
                    <td>
						<form name="formModif{$r.id_empleado}" method="post" action="empleado_modificar.php">
						<input type="hidden" name="id_empleado" value="{$r.id_empleado}">
						<a href="javascript:document.formModif{$r.id_empleado}.submit();" title="Modificar empleado Sistema">
							Modificar>>>
						</a>
						</form>
					</td>
					<td>
						<form name="formElimi{$r.id_empleado}" method="post" action="empleado_eliminar.php">
						<input type="hidden" name="id_empleado" value="{$r.id_empleado}">
						<a href="javascript:document.formElimi{$r.id_empleado}.submit();" title="Eliminar empleado Sistema" onclick='javascript: return(confirm("Desea realmente Eliminar al empleado..?"));'>
							Eliminar>>>
						</a>
						</form>
					</td>
					{assign var="b" value="`$b+1`"}
					{/foreach}
				</tr>
			</table>
			</div>
		</center>
	</body>
</html>
