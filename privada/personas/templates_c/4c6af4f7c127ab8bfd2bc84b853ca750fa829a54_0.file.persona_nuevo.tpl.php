<?php
/* Smarty version 3.1.29, created on 2020-08-02 20:11:31
  from "D:\disenoWeb\www\sis_aluformas\privada\personas\templates\persona_nuevo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f271df36ba009_10893904',
  'file_dependency' => 
  array (
    '4c6af4f7c127ab8bfd2bc84b853ca750fa829a54' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\personas\\templates\\persona_nuevo.tpl',
      1 => 1596396253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f271df36ba009_10893904 ($_smarty_tpl) {
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
 type="text/javascript" src="js/validar_persona.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<br><br><br><br>
		<center>
			<h2>REGISTRAR PERSONA SISTEMA</h2>
			<form action="persona_nuevo1.php" method="post" name="formu">
				<table>
					<tr>
						<th align="left">CI(*)</th>
						<th>:</th>
						<td><input type="text" name="ci" onkeyup="this.value=this.value.toUpperCase()"></td>
					</tr>
					<tr>
						<th align="left">Nombres(*)</th>
						<th>:</th>
						<td><input type="text" name="nombre" onkeyup="this.value=this.value.toUpperCase()"></td>
					</tr>
					<tr>
						<th align="left">Apellido Paterno</th>
						<th>:</th>
						<td><input type="text" name="ap" onkeyup="this.value=this.value.toUpperCase()"></td>
					</tr>
					<tr>
						<th align="left">Apellido Materno</th>
						<th>:</th>
						<td><input type="text" name="am" onkeyup="this.value=this.value.toUpperCase()"></td>
					</tr>
					<tr>
						<th align="left">Direccion</th>
						<th>:</th>
						<td><input type="text" name="direccion" onkeyup="this.value=this.value.toUpperCase()"></td>
					</tr>
					<tr>
						<th align="left">Telefono</th>
						<th>:</th>
						<td><input type="text" name="telefono" onkeyup="this.value=this.value.toUpperCase()" maxlength="9"></td>
					</tr>
					<tr>
						<th align="left">Genero(*)</th>
						<th>:</th>
						<td><input type="radio" name="genero" value="F">Femenino<input type="radio" name="genero" value="M">Masculino</td>
					</tr>
					<tr>
						<td align="center" colspan="3">
							<input type="hidden" name="accion" value="">
							<input type="button" value="Aceptar" onclick="validar();">
							<input type="button" value="Cancelar" onclick="javascript:location.href='personas.php';">
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
