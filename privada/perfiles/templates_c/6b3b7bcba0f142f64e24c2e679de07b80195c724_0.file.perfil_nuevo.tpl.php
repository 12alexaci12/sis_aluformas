<?php
/* Smarty version 3.1.29, created on 2020-08-02 19:50:34
  from "D:\disenoWeb\www\sis_aluformas\privada\empleados\templates\empleado_nuevo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f27190aacba97_39640906',
  'file_dependency' => 
  array (
    '6b3b7bcba0f142f64e24c2e679de07b80195c724' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\empleados\\templates\\empleado_nuevo.tpl',
      1 => 1596397371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f27190aacba97_39640906 ($_smarty_tpl) {
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
 type="text/javascript" src="js/validar_empleado.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<br><br><br><br>
		<center>
			<h2>REGISTRAR EMLEADO</h2>
			<form action="empleado_nuevo1.php" method="post" name="formu">
				<table>
                    <tr>
                        <th align="left">Nombres(*)</th>
                        <th>:</th>
                        <td><input type="text" name="nombre" onkeyup="this.value=this.value.toUpperCase()"></td>
                    </tr>
					<tr>
						<th align="left">CI(*)</th>
						<th>:</th>
						<td><input type="text" name="ci" onkeyup="this.value=this.value.toUpperCase()"></td>
					</tr>
					<tr>
						<th align="left">Telefono</th>
						<th>:</th>
						<td><input type="text" name="telefono" onkeyup="this.value=this.value.toUpperCase()" maxlength="9"></td>
					</tr>
					<tr>
						<td align="center" colspan="3">
							<input type="hidden" name="accion" value="">
							<input type="button" value="Aceptar" onclick="validar();">
							<input type="button" value="Cancelar" onclick="javascript:location.href='empleados.php';">
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
