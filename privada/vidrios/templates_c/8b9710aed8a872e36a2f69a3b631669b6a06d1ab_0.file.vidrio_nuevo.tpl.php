<?php
/* Smarty version 3.1.29, created on 2021-04-30 02:55:37
  from "D:\disenoWeb\www\sis_aluformas\privada\vidrios\templates\vidrio_nuevo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_608b71a9dabbc4_26103175',
  'file_dependency' => 
  array (
    '8b9710aed8a872e36a2f69a3b631669b6a06d1ab' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\vidrios\\templates\\vidrio_nuevo.tpl',
      1 => 1619751325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608b71a9dabbc4_26103175 ($_smarty_tpl) {
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
 type="text/javascript" src="js/validar_vidrio.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<br><br><br><br>
		<center>
			<h2>REGISTRAR vidrio</h2>
			<form action="vidrio_nuevo1.php" method="post" name="formu">
				<table align="center">
					<tr>
                              <th align="right">tipo de vidrio (*)</th><th align="top">:</th>
                              <td>
                                   <select name="tipo_vidrio">
                                        <?php
$_from = $_smarty_tpl->tpl_vars['tipo_vidrios']->value;
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
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_tipo_vidrio'];?>
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
                              <th align="right">Color (*)</th><th align="top">:</th>
                              <td>
                                   <select name="color">
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
	                        <td colspan="3" align="center"><input type="text" name="ancho" placeholder="ancho (*)"></td>
	                    </tr>
					<tr>
						<td colspan="3" align="center"><input type="text" name="alto" placeholder="largo (*)"></td>
					</tr>
					<tr>
						<td align="center" colspan="3">
							<input type="hidden" name="accion" value="">
							<input type="button" value="Aceptar" onclick="validar();">
							<input type="button" value="Cancelar" onclick="javascript:location.href='vidrios.php';">
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
