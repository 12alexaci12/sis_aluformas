<?php
/* Smarty version 3.1.29, created on 2020-08-02 19:45:43
  from "D:\disenoWeb\www\sis_aluformas\privada\empleados\templates\empleados.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f2717e7648e32_09407706',
  'file_dependency' => 
  array (
    'e705331c0d5091219e7d9517875706d1a1374298' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\empleados\\templates\\empleados.tpl',
      1 => 1596397538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2717e7648e32_09407706 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<div class="normal">
			<br><br><br><br>
			<table width="100%" border="0">
				<tr>
					<td width="33%">
						<table border="0">
							<tr>
							</tr>
						</table>
					</td>
					<td align="center" width="33%">
						<h2>Empleados</h2>
					</td>
					<td align="left" width="33%">
						<form name="formNuevo" method="post" action="empleado_nuevo.php">
							<a href="javascript:document.formNuevo.submit();">
							Nuevo>>>>
							</a>
						</form>
					</td>
				</tr>
			</table>
		</div>
		<div class="listado">
		<center>
			<table>
				<thead>
					<tr>
						<th>NRO</th><th>nombre</th><th>ci</th><th>telefono</th>
						<th><img src="../../imagenes/modificar.gif"></th><th><img src="../../imagenes/borrar.jpeg"></th>
					</tr>
				</thead>
				<?php $_smarty_tpl->tpl_vars["b"] = new Smarty_Variable("1", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "b", 0);?>
				<?php
$_from = $_smarty_tpl->tpl_vars['empleados']->value;
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
				<tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['r']->value['ci'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['r']->value['telefono'];?>
</td>
                    <td>
						<form name="formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_empleado'];?>
" method="post" action="empleado_modificar.php">
						<input type="hidden" name="id_empleado" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_empleado'];?>
">
						<a href="javascript:document.formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_empleado'];?>
.submit();" title="Modificar empleado Sistema">
							Modificar>>>
						</a>
						</form>
					</td>
					<td>
						<form name="formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_empleado'];?>
" method="post" action="empleado_eliminar.php">
						<input type="hidden" name="id_empleado" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_empleado'];?>
">
						<a href="javascript:document.formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_empleado'];?>
.submit();" title="Eliminar empleado Sistema" onclick='javascript: return(confirm("Desea realmente Eliminar al empleado..?"));'>
							Eliminar>>>
						</a>
						</form>
					</td>
					<?php $_smarty_tpl->tpl_vars["b"] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['b']->value+1), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "b", 0);?>
					<?php
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_0_saved_local_item;
}
if ($__foreach_r_0_saved_item) {
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_0_saved_item;
}
?>
				</tr>
			</table>
			</div>
		</center>
	</body>
</html>
<?php }
}
