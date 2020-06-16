<?php
/* Smarty version 3.1.29, created on 2020-06-16 01:10:33
  from "D:\disenoWeb\www\sis_aluformas\privada\usuarios\templates\usuario_nuevo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ee81c0961d064_94995036',
  'file_dependency' => 
  array (
    'c0a7c577d0b606608a6324a79c00e775a2d8b756' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\usuarios\\templates\\usuario_nuevo.tpl',
      1 => 1585335165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee81c0961d064_94995036 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
">
		<?php echo '<script'; ?>
 type="text/javascript" src="js/expreciones_regulares.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="js/validar_usuario.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<center>
			<h1>REGISTRAR USUARIO</h1>
			<form action="usuario_nuevo1.php" method="post" name="formu">
				<table border="1">
					<tr>
						<th align="right">Persona (*)</th>
						<th>:</th>
						<td> 
							<select name="id_persona">
								<option value="">--- Seleccione---</option>
								<?php
$_from = $_smarty_tpl->tpl_vars['personas']->value;
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
								<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_persona'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
-<?php echo $_smarty_tpl->tpl_vars['r']->value['am'];?>
-<?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
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
						<th align="right">Usuario (*)</th>
						<th>:</th>
						<td><input type="text" name="usuario1"></td>
					</tr>
					<tr>
						<th align="right">Clave (*)</th>
						<th>:</th>
						<td><input type="password" name="clave"></td>
					</tr>
					<tr>
						<td align="center" colspan="3">
							<input type="hidden" name="accion" value="">
							<input type="button" value="Aceptar" onclick="validar();">
							<input type="button" value="Cancelar" onclick="javascript:location.href='usuarios.php';">
						</td>
					</tr>
				</table>
				<table>
					<tr>
						<td colspan="3" align="center"><b>(*)Campos Obligatorios</b></td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html><?php }
}
