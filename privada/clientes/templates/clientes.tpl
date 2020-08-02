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
						<h2>Clientes</h2>
					</td>
					<td align="left" width="33%">
						<form name="formNuevo" method="post" action="cliente_nuevo.php">
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
						<th>NRO</th><th>nombre</th><th>telefono</th><th>direccion</th>
						<th><img src="../../imagenes/modificar.gif"></th><th><img src="../../imagenes/borrar.jpeg"></th>
					</tr>
				</thead>
				{assign var="b" value="1"}
				{foreach item=r from=$clientes}
				<tr>
                    <td>{$b}</td>
					<td>{$r.nombre}</td>
					<td>{$r.telefono}</td>
					<td>{$r.direccion}</td>
                    <td>
						<form name="formModif{$r.id_cliente}" method="post" action="cliente_modificar.php">
						<input type="hidden" name="id_cliente" value="{$r.id_cliente}">
						<a href="javascript:document.formModif{$r.id_cliente}.submit();" title="Modificar cliente Sistema">
							Modificar>>>
						</a>
						</form>
					</td>
					<td>
						<form name="formElimi{$r.id_cliente}" method="post" action="cliente_eliminar.php">
						<input type="hidden" name="id_cliente" value="{$r.id_cliente}">
						<a href="javascript:document.formElimi{$r.id_cliente}.submit();" title="Eliminar cliente Sistema" onclick='javascript: return(confirm("Desea realmente Eliminar al cliente..?"));'>
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
