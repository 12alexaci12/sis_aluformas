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
						<h2>tipo de perfiles</h2>
					</td>
					<td align="left" width="33%">
						<form name="formNuevo" method="post" action="tipo_perfil_nuevo.php">
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
						<th>NRO</th><th>tipo_perfil</th>
						<th><img src="../../imagenes/modificar.gif"></th><th><img src="../../imagenes/borrar.jpeg"></th>
					</tr>
				</thead>
				{assign var="b" value=0}
	               {assign var="total" value=$pagina-1}
	               {assign var="a" value=$numreg*$total}
	               {assign var="b" value=$b+1+$a}
	               {foreach item=r from=$tipo_perfil}
				<tr>
                    	<td>{$b}</td>
					<td>{$r.nombre}</td>
                    <td>
						<form name="formModif{$r.id_tipo_perfil}" method="post" action="tipo_perfil_modificar.php">
						<input type="hidden" name="id_tipo_perfil" value="{$r.id_tipo_perfil}">
						<a href="javascript:document.formModif{$r.id_tipo_perfil}.submit();" title="Modificar tipo_perfil Sistema">
							Modificar>>>
						</a>
						</form>
					</td>
					<td>
						<form name="formElimi{$r.id_tipo_perfil}" method="post" action="tipo_perfil_eliminar.php">
						<input type="hidden" name="id_tipo_perfil" value="{$r.id_tipo_perfil}">
						<a href="javascript:document.formElimi{$r.id_tipo_perfil}.submit();" title="Eliminar tipo_perfil Sistema" onclick='javascript: return(confirm("Desea realmente Eliminar al tipo_perfil..?"));'>
							Eliminar>>>
						</a>
						</form>
					</td>
					{assign var="b" value=$b+1}
					{/foreach}
				</tr>
			</table>
			<div class="normal">
				<table>
					<tr align="center">
	                        <td>
	                            {if !empty($urlback)}
	                            <a onclick="location.href='{$urlback}'" style="font-family: Verdana; font-size: 14px; cursor:pointer;">&laquo;Anterior</a>
	                            {/if}
	                            {if !empty($paginas)}
	                                {foreach from=$paginas item=pag}
	                                    {if $pag.npag == $pagina}
	                                    {if $pagina neq '1'} |{/if}
	                                    <b style="tipo_perfil:#fb992f; font-size:16px;"> {$pag.npag}</b>
	                                    {else}
	                                    <a onclick="location.href='{$pag.pagV}'" style="cursor:pointer;"> {$pag.npag}</a>
	                                    {/if}
	                                {/foreach}
	                            {/if}
	                            {if $numpaginas gt $numbotones and !empty($urlnext) and $pagina lt $numpaginas}
	                            <a onclick="location.href='{$urlnext}'" style="font-family: Verdana; font-size:14px; cursor:pointer;">Siguiente&laquo; </a>
	                            {/if}
	                        </td>
	                    </tr>
				</table>
			</div>
			</div>
		</center>
	</body>
</html>
