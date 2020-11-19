<?php
/* Smarty version 3.1.29, created on 2020-11-19 02:03:21
  from "D:\disenoWeb\www\sis_aluformas\privada\perfiles\templates\perfil_nuevo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fb5d269617d16_24859343',
  'file_dependency' => 
  array (
    'cbd5fc8a338cfc62d84cb5a0872415787ab942f8' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\perfiles\\templates\\perfil_nuevo.tpl',
      1 => 1605751391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb5d269617d16_24859343 ($_smarty_tpl) {
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
								<legend>Seleccione el Tipo de perfil</legend>
								<table align="center">
									<tr>
										<td>
											<table>
												<tr>
													<td>
														<b>Color</b>
														<input type="text" name="color" value="" size="10" onKeyup="buscar1()">
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
							<table>
								<tr>
									<th align="right">Linea de Perfil (*)</th>
									<th>:</th>
									<td>
										<select name="linea_perfil">
											<option value="">--- Seleccione---</option>
											<?php
$_from = $_smarty_tpl->tpl_vars['linea_perfil']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_r_0_saved_item = isset($_smarty_tpl->tpl_vars['r']) ? $_smarty_tpl->tpl_vars['r'] : false;
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$__foreach_r_0_saved_local_item = $_smarty_tpl->tpl_vars['r'];
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_linea_perfil'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['linea'];?>
</option>
											<?php
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_0_saved_local_item;
}
if ($__foreach_r_0_saved_item) {
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_0_saved_item;
}
?>
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
<?php }
}
