<?php
/* Smarty version 3.1.29, created on 2020-11-05 21:40:54
  from "D:\disenoWeb\www\sis_aluformas\privada\linea_perfil\templates\linea_perfil_nuevo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fa471660daf20_15868849',
  'file_dependency' => 
  array (
    'acec23e8ba1997e68c93a37a1c4a247a653923e7' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\linea_perfil\\templates\\linea_perfil_nuevo.tpl',
      1 => 1603743779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa471660daf20_15868849 ($_smarty_tpl) {
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
 type="text/javascript" src="js/validar_linea_perfil.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<br><br><br><br>
		<center>
			<h2>REGISTRAR linea_perfil</h2>
			<form action="linea_perfil_nuevo1.php" method="post" name="formu">
				<table>
	                    <tr>
	                        <th align="left">linea(*)</th>
	                        <th>:</th>
	                        <td><input type="text" name="linea" onkeyup="this.value=this.value.toUpperCase()"></td>
	                    </tr>
					<tr>
						<td align="center" colspan="3">
							<input type="hidden" name="accion" value="">
							<input type="button" value="Aceptar" onclick="validar();">
							<input type="button" value="Cancelar" onclick="javascript:location.href='linea_perfil.php';">
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
