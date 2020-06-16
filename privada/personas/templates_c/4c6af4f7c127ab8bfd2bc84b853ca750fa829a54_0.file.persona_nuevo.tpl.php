<?php
/* Smarty version 3.1.29, created on 2020-06-16 04:40:49
  from "D:\disenoWeb\www\sis_aluformas\privada\personas\templates\persona_nuevo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ee84d51a07932_99063500',
  'file_dependency' => 
  array (
    '4c6af4f7c127ab8bfd2bc84b853ca750fa829a54' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\personas\\templates\\persona_nuevo.tpl',
      1 => 1592278151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee84d51a07932_99063500 ($_smarty_tpl) {
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
		<center>
			<h1>REGISTRAR PERSONA SISTEMA</h1>
			<form action="persona_nuevo1.php" method="post" name="formu">
				<table border="1">
					<tr>
						<th align="right">CI(*)</th>
						<th>:</th>
						<td><input type="text" name="ci" onkeyup="this.value=this.value.toUpperCase()"></td>
					</tr>
					<tr>
						<th align="right">Nombres(*)</th>
						<th>:</th>
						<td><input type="text" name="nombre" onkeyup="this.value=this.value.toUpperCase()"></td>
					</tr>
					<tr>
						<th align="right">Apellido Paterno</th>
						<th>:</th>
						<td><input type="text" name="ap" onkeyup="this.value=this.value.toUpperCase()"></td>
					</tr>
					<tr>
						<th align="right">Apellido Materno</th>
						<th>:</th>
						<td><input type="text" name="am" onkeyup="this.value=this.value.toUpperCase()"></td>
					</tr>
					<tr>
						<th align="right">Direccion</th>
						<th>:</th>
						<td><input type="text" name="direccion" onkeyup="this.value=this.value.toUpperCase()"></td>
					</tr>
					<tr>
						<th align="right">Telefono</th>
						<th>:</th>
						<td><input type="text" name="telefono" onkeyup="this.value=this.value.toUpperCase()" maxlength="9"></td>
					</tr>
					<tr>
						<th align="right">Genero(*)</th>
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
				</table>
				<table>
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
