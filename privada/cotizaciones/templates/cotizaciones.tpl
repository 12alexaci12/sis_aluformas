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
						<h2>PERSONAS</h2>
					</td>
					<td align="left" width="33%">
						<form name="formNuevo" method="post" action="persona_nuevo.php">
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
						<th>NRO</th><th>empleado</th><th>cliente</th><th>fecha</th><th>precio</th><th align="center"><bold>+</bold></th>
						<th><img src="../../imagenes/modificar.gif"></th><th><img src="../../imagenes/borrar.jpeg"></th>
					</tr>
				</thead>
				{assign var="b" value="1"}
				{foreach item=r from=$cotizaciones}
				<tr>
                         <td >{$b}</td>
					<td>{$r.empleado}</td>
					<td>{$r.cliente}</td>
					<td >{$r.fecha}</td>
					<td>{$r.precio_final}</td>
					<td>
                              <form name="formdetalles" action="detalles.php" method="post">
                                   <a href="detalles.php?id_cotizacion={$r.id_cotizacion}">detalles</a>
                              </form>
                         </td>
					<td>
                              Modificar>>>
					</td>
					<td>
                              Eliminar>>>
					</td>
					{assign var="b" value="`$b+1`"}
					{/foreach}
				</tr>
			</table>
			</div>
		</center>
	</body>
</html>
