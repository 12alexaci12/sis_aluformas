<?php
/* Smarty version 3.1.29, created on 2020-08-04 00:11:33
  from "D:\disenoWeb\www\sis_aluformas\privada\bancos\templates\banco_nuevo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f28a7b539e888_17759952',
  'file_dependency' => 
  array (
    '4a0166a8f0f4ac795d9d308afeae0e24f4fe4ea3' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\bancos\\templates\\banco_nuevo.tpl',
      1 => 1596499871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f28a7b539e888_17759952 ($_smarty_tpl) {
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
 type="text/javascript" src="js/validar_banco.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<br><br><br><br>
		<center>
			<h2>REGISTRAR BANCOS</h2>
			<form action="banco_nuevo1.php" method="post" name="formu">
				<table>
	                    <tr>
	                        <th align="left">Nombres(*)</th>
	                        <th>:</th>
	                        <td><input type="text" name="nombre" onkeyup="this.value=this.value.toUpperCase()"></td>
	                    </tr>
					<tr>
						<th align="left">Telefono</th>
						<th>:</th>
						<td><input type="text" name="telefono" maxlength="9"></td>
					</tr>
					<tr>
						<th align="left">Direccion(*)</th>
						<th>:</th>
						<td><input type="text" name="direccion" onkeyup="this.value=this.value.toUpperCase()"></td>
					</tr>
					<tr>
						<th align="left">URL(*)</th>
						<th>:</th>
						<td><input type="text" name="url" onkeyup="this.value=this.value.toUpperCase()"></td>
					</tr>
					<tr>
						<td align="center" colspan="3">
							<input type="hidden" name="accion" value="">
							<input type="button" value="Aceptar" onclick="validar();">
							<input type="button" value="Cancelar" onclick="javascript:location.href='bancos.php';">
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
