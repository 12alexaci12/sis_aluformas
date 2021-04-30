<?php
/* Smarty version 3.1.29, created on 2021-04-21 00:18:15
  from "D:\disenoWeb\www\sis_aluformas\privada\perfiles\templates\perfil_nuevo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_607f6f47a452b5_79757366',
  'file_dependency' => 
  array (
    'cbd5fc8a338cfc62d84cb5a0872415787ab942f8' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\perfiles\\templates\\perfil_nuevo.tpl',
      1 => 1618964287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607f6f47a452b5_79757366 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
">
		<?php echo '<script'; ?>
 type="text/javascript" src="js/expresiones_regulares.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="js/validar_perfil.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript">
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
     	<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript">
     		function buscar1(){
     			var d1, contenedor, url;
     			contenedor = document.getElementById('colores');
                    contenedor2 = document.getElementById('color_seleccionado');
                    contenedor3 = document.getElementById('color_insertado');
     			d1 = document.formu.color.value;
     			ajax = nuevoAjax();
     			url = "ajax_buscar_colores.php";
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

               function buscar_color(id_color){
				var d1, contenedor, url;
				contenedor = document.getElementById('color_seleccionado');
                    contenedor2 = document.getElementById('colores');
				document.formu.id_color.value = id_color;

				d1 = id_color;

				ajax = nuevoAjax();
     			url = "ajax_buscar_colores1.php";
				param = "id_color="+d1;
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

			function insertar_color(){
				var d1, contenedor, url;
     			contenedor = document.getElementById('color_seleccionado');
                    contenedor2 = document.getElementById('colores');
                    contenedor3 = document.getElementById('color_insertado');
     			d1 = document.formu.color1.value;
				if (d1 == "") {
					alert("El nombre es incorrecto o el campo esta vacio");
					document.formu.color1.focus();
					return;
				}
				ajax = nuevoAjax();
     			url = "ajax_inserta_color.php";
				param = "color1="+d1;
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
     	<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript">
     		function buscar2(){
     			var d1, contenedor, url;
     			contenedor = document.getElementById('lineas');
                    contenedor2 = document.getElementById('linea_seleccionado');
                    contenedor3 = document.getElementById('linea_insertado');
     			d1 = document.formu.linea.value;
     			ajax = nuevoAjax();
     			url = "ajax_buscar_lineas.php";
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

               function buscar_linea(id_linea){
				var d1, contenedor, url;
				contenedor = document.getElementById('linea_seleccionado');
                    contenedor2 = document.getElementById('lineas');
				document.formu.id_linea.value = id_linea;

				d1 = id_linea;

				ajax = nuevoAjax();
     			url = "ajax_buscar_lineas1.php";
				param = "id_linea="+d1;
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

			function insertar_linea(){
				var d1, contenedor, url;
     			contenedor = document.getElementById('linea_seleccionado');
                    contenedor2 = document.getElementById('lineas');
                    contenedor3 = document.getElementById('linea_insertado');
     			d1 = document.formu.linea1.value;
				if (d1 == "") {
					alert("El nombre es incorrecto o el campo esta vacio");
					document.formu.linea1.focus();
					return;
				}
				ajax = nuevoAjax();
     			url = "ajax_inserta_linea.php";
				param = "linea1="+d1;
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
     	<?php echo '</script'; ?>
>
	</head>
	<body>
		<br><br><br><br>
		<center>
			<h2>REGISTRAR PERFIL</h2>
			<form action="perfil_nuevo1.php" method="post" name="formu">
				<table>
					<tr>
						<td>
							<fieldset border="2">
								<legend>Seleccione el Tipo de perfil</legend>
								<table align="center">
									<tr>
										<td>
											<table align="center">
												<tr>
													<th>
														<input type="text" name="nombre" value="" size="15" onKeyup="buscar()" placeholder="nombre de perfil (*)">
													</th>
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
														<div id="perfil_insertado" class="listado"></div>
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
							<fieldset border="2">
								<legend>Seleccione el Color</legend>
								<table align="center">
									<tr>
										<td>
											<table align="center">
												<tr>
													<th>
														<input type="text" name="color" value="" size="15" onKeyup="buscar1()" placeholder="color (*)">
													</th>
												</tr>
											</table>
										</td>
									</tr>
									<tr>
										<td colspan="6">
											<table width="100%">
												<tr>
													<td colspan="3">
														<div id="colores" class="listado"></div>
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
														<div id="color_seleccionado"></div>
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
														<input type="hidden" name="id_color">
														<div id="color_insertado" class="listado"></div>
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
							<fieldset border="2">
								<legend>Seleccione la Linea de perfil</legend>
								<table align="center">
									<tr>
										<td>
											<table align="center">
												<tr>
													<th>
														<input type="text" name="linea" value="" size="15" onKeyup="buscar2()" placeholder="linea (*)">
													</th>
												</tr>
											</table>
										</td>
									</tr>
									<tr>
										<td colspan="6">
											<table width="100%">
												<tr>
													<td colspan="3">
														<div id="lineas" class="listado"></div>
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
														<div id="linea_seleccionado"></div>
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
														<input type="hidden" name="id_linea">
														<div id="linea_insertado" class="listado"></div>
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
							<table align="center">
				                    <tr>
				                        <th><input type="text" name="largo" placeholder="Largo (*)"></th>
				                    </tr>
								<tr>
									<th><input type="text" name="precio" placeholder="Precio (*)"></th>
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
<?php }
}
