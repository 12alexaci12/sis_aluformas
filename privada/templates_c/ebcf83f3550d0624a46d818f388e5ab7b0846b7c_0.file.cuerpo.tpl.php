<?php
/* Smarty version 3.1.29, created on 2020-08-02 01:48:20
  from "C:\wamp64\www\sis_aluformas\privada\templates\cuerpo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f261b6487dcb5_09691852',
  'file_dependency' => 
  array (
    'ebcf83f3550d0624a46d818f388e5ab7b0846b7c' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_aluformas\\privada\\templates\\cuerpo.tpl',
      1 => 1595027908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f261b6487dcb5_09691852 ($_smarty_tpl) {
?>
<!DOCTYPE html>
 	<head>
      		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
">
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
