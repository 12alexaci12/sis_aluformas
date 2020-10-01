<?php
/* Smarty version 3.1.29, created on 2020-10-01 21:39:06
  from "D:\disenoWeb\www\sis_aluformas\privada\tipo_vidrio\templates\tipo_vidrio_nuevo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f764c7a114fb3_05525083',
  'file_dependency' => 
  array (
    '532245d18c9fa078aca5fe4cf81fa65f6b01f600' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\tipo_vidrio\\templates\\tipo_vidrio_nuevo.tpl',
      1 => 1601588292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f764c7a114fb3_05525083 ($_smarty_tpl) {
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
 type="text/javascript" src="js/validar_tipo_vidrio.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<br><br><br><br>
		<center>
			<h2>REGISTRAR tipo_vidrio</h2>
			<form action="tipo_vidrio_nuevo1.php" method="post" name="formu">
				<table>
	                    <tr>
	                        <th align="left">Nombres(*)</th>
	                        <th>:</th>
	                        <td><input type="text" name="nombre" onkeyup="this.value=this.value.toUpperCase()"></td>
	                    </tr>
					<tr>
						<td align="center" colspan="3">
							<input type="hidden" name="accion" value="">
							<input type="button" value="Aceptar" onclick="validar();">
							<input type="button" value="Cancelar" onclick="javascript:location.href='tipo_vidrio.php';">
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
