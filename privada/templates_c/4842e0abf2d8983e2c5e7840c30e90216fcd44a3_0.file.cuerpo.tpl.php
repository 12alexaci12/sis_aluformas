<?php
/* Smarty version 3.1.29, created on 2020-03-27 18:29:04
  from "C:\wamp64\www\Sis_internet_1\privada\templates\cuerpo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e7e45f0116b56_35274440',
  'file_dependency' => 
  array (
    '4842e0abf2d8983e2c5e7840c30e90216fcd44a3' => 
    array (
      0 => 'C:\\wamp64\\www\\Sis_internet_1\\privada\\templates\\cuerpo.tpl',
      1 => 1583452616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7e45f0116b56_35274440 ($_smarty_tpl) {
?>
<!DOCTYPE html>
 	<head>
 		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	 </head>
 <body>
 		<form action="claves/" method="post" target="cuerpo">
 		<?php if ($_smarty_tpl->tpl_vars['nick']->value == '') {?>
 			<table width="15%" align="center" border="1">
 				<tr>
 					<th align="center" colspan="2">Ingresar al Sistema</th>
 				</tr>
 				<tr>
 					<td><b>Login:</b></td>
 					<td><input type="text" name="nick" size="11" value="" class="limpiar"></td>
 				</tr>
 				<tr>
 					<td><b>Clave:</b></td>
 					<td><input type="password" name="password" size="11" value=""></td>
 				</tr>
 				<tr>
 					<td colspan="2" align="center">
 					<input type="submit" name="accion" value="Ingresar" size="5">
 					</td>
 				</tr>
 			</table>
 			<?php }?>
 		</form>
 	</body>
 </html><?php }
}
