<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../{$direc_css}">
		<script type="text/javascript" src="js/expresiones_regulares.js"></script>
		<script type="text/javascript" src="js/validar_perfil.js"></script>
		<script type="text/javascript" src="../../ajax.js"></script>
		<script type="text/javascript">
     		function buscar(){
     			var d1, contenedor, url;
     			contenedor = document.getElementById('perfiles');
                    contenedor2 = document.getElementById('perfil_seleccionado');
                    contenedor3 = document.getElementById('perfil_insertado');
     			d1 = document.formu.nombre.value;
     			ajax = nuevoAjax();
     			url = "ajax_buscar_perfiles.php";
     			param = "nombre="+d1;
     			ajax.open("POST", url, true);
     			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
     			ajax.onreadystatechange = function(){
     				if (ajax.readyState == 4) {
     					contenedor.innerHTML = ajax.responseText;
                              contenedor2.innerHTML = "";
                              contenedor3.innerHTML = "";
     				}
     			}
     			ajax.send(param);
     		}

               function buscar_perfil(id_tipo_perfil){
				var d1, contenedor, url;
				contenedor = document.getElementById('perfil_seleccionado');
                    contenedor2 = document.getElementById('perfiles');
				document.formu.id_tipo_perfil.value = id_tipo_perfil;

				d1 = id_tipo_perfil;

				ajax = nuevoAjax();
     			url = "ajax_buscar_perfiles1.php";
				param = "id_tipo_perfil="+d1;
				ajax.open("POST", url, true);
     			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
     			ajax.onreadystatechange = function(){
     				if (ajax.readyState == 4) {
     					contenedor.innerHTML = ajax.responseText;
                              contenedor2.innerHTML = "";
     				}
     			}
     			ajax.send(param);
			}

			function insertar_perfil(){
				var d1, contenedor, url;
     			contenedor = document.getElementById('perfil_seleccionado');
                    contenedor2 = document.getElementById('perfiles');
                    contenedor3 = document.getElementById('perfil_insertada');
     			d1 = document.formu.nombre1.value;
				if (d1 == "") {
					alert("El nombre es incorrecto o el campo esta vacio");
					document.formu.nombre1.focus();
					return;
				}
				ajax = nuevoAjax();
     			url = "ajax_inserta_perfil.php";
				param = "nombre1="+d1;
				ajax.open("POST", url, true);
     			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
     			ajax.onreadystatechange = function(){
     				if (ajax.readyState == 4) {
						contenedor.innerHTML = "";
                              contenedor2.innerHTML = "";
                              contenedor3.innerHTML = ajax.responseText;
     				}
     			}
     			ajax.send(param);
			}
     	</script>
	</head>
	<body>
		<br><br><br><br>
		<center>
			<h2>REGISTRAR EMLEADO</h2>
			<form action="perfil_nuevo1.php" method="post" name="formu">
				<table>
					<tr>
						<td>
							<fieldset border="2">
								<legend>Seleccione el Tipo de perfil</legend>
								<table align="center">
									<tr>
										<td>
											<table>
												<tr>
													<td>
														<b>nombre de perfil</b>
														<input type="text" name="nombre" value="" size="10" onKeyup="buscar()">
													</td>
												</tr>
											</table>
										</td>
									</tr>
									<tr>
										<td colspan="6">
											<table width="100%">
												<tr>
													<td colspan="3">
														<div id="perfiles" class="listado"></div>
													</td>
												</tr>
											</table>
										</td>
									</tr>
									<tr>
										<td colspan="6">
											<table width="100%">
												<tr>
													<td colspan="3">
														<div id="perfil_seleccionado"></div>
													</td>
												</tr>
											</table>
										</td>
									</tr>
									<tr>
										<td colspan="6">
											<table width="100%">
												<tr>
													<td colspan="3">
														<input type="hidden" name="id_tipo_perfil">
														<div id="perfil_insertada" class="listado"></div>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</fieldset>
						</td>
					</tr>
					<tr>
						<td>
							<table>
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
						</td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>
