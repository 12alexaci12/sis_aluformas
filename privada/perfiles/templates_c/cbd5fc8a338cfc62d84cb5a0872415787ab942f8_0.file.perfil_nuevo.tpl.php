<?php
/* Smarty version 3.1.29, created on 2020-10-01 19:41:22
  from "D:\disenoWeb\www\sis_aluformas\privada\perfiles\templates\perfil_nuevo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f7630e2ca07f5_50421048',
  'file_dependency' => 
  array (
    'cbd5fc8a338cfc62d84cb5a0872415787ab942f8' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\perfiles\\templates\\perfil_nuevo.tpl',
      1 => 1601581276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7630e2ca07f5_50421048 ($_smarty_tpl) {
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
								<?php
$_from = $_smarty_tpl->tpl_vars['tipo_perfil']->value;
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
								<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_tipo_perfil'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
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
						<th align="right">Colores (*)</th>
						<th>:</th>
						<td>
							<select name="color">
								<option value="">--- Seleccione---</option>
								<?php
$_from = $_smarty_tpl->tpl_vars['colores']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_r_1_saved_item = isset($_smarty_tpl->tpl_vars['r']) ? $_smarty_tpl->tpl_vars['r'] : false;
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$__foreach_r_1_saved_local_item = $_smarty_tpl->tpl_vars['r'];
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_color'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</option>
								<?php
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_1_saved_local_item;
}
if ($__foreach_r_1_saved_item) {
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_1_saved_item;
}
?>
							</select>
						</td>
					</tr>
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
$__foreach_r_2_saved_item = isset($_smarty_tpl->tpl_vars['r']) ? $_smarty_tpl->tpl_vars['r'] : false;
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$__foreach_r_2_saved_local_item = $_smarty_tpl->tpl_vars['r'];
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_linea_perfil'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['linea'];?>
</option>
								<?php
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_2_saved_local_item;
}
if ($__foreach_r_2_saved_item) {
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_2_saved_item;
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
			</form>
		</center>
	</body>
</html>
<?php }
}
