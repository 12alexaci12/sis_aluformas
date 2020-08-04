<?php
/* Smarty version 3.1.29, created on 2020-08-04 01:15:43
  from "D:\disenoWeb\www\sis_aluformas\privada\b_clientes\templates\cliente_nuevo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f28b6bf80a560_59188829',
  'file_dependency' => 
  array (
    '7a3bc862ab0b6253af24eb18a7e7f5da5ed31924' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\b_clientes\\templates\\cliente_nuevo.tpl',
      1 => 1596503733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f28b6bf80a560_59188829 ($_smarty_tpl) {
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
 type="text/javascript" src="js/validar_cliente.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<br><br><br><br>
		<center>
			<h2>REGISTRAR CLIENTE</h2>
			<form action="cliente_nuevo1.php" method="post" name="formu">
				<table>
					<th align="right">Banco (*)</th>
					<th>:</th>
					<td>
						<select name="id_banco">
							<option value="">--- Seleccione---</option>
							<?php
$_from = $_smarty_tpl->tpl_vars['bancos']->value;
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
							<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_banco'];?>
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
	                    <tr>
	                        <th align="left">Nombres(*)</th>
	                        <th>:</th>
	                        <td><input type="text" name="nombre" onkeyup="this.value=this.value.toUpperCase()"></td>
	                    </tr>
                         <tr>
                              <th align="left">ci</th><th>:</th>
                              <td> <input type="text" name="ci" onkeyup="this.value=this.value.toUpperCase()"> </td>
                         </tr>
                         <tr>
                              <th align="left">A Paterno</th><th>:</th>
                              <td> <input type="text" name="ap" onkeyup="this.value=this.value.toUpperCase()"> </td>
                         </tr>
                         <tr>
                              <th align="left">A Materno</th><th>:</th>
                              <td> <input type="text" name="am" onkeyup="this.value=this.value.toUpperCase()"> </td>
                         </tr>
					<tr>
						<th align="left">Telefono</th>
						<th>:</th>
						<td><input type="text" name="telefono" onkeyup="this.value=this.value.toUpperCase()" maxlength="9"></td>
					</tr>
					<tr>
						<th align="left">Direccion(*)</th>
						<th>:</th>
						<td><input type="text" name="direccion" onkeyup="this.value=this.value.toUpperCase()"></td>
					</tr>
					<tr>
						<td align="center" colspan="3">
							<input type="hidden" name="accion" value="">
							<input type="button" value="Aceptar" onclick="validar();">
							<input type="button" value="Cancelar" onclick="javascript:location.href='clientes.php';">
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
