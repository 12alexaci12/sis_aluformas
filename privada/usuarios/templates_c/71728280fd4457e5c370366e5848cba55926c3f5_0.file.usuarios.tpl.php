<?php
/* Smarty version 3.1.29, created on 2020-08-02 19:26:13
  from "D:\disenoWeb\www\sis_aluformas\privada\usuarios\templates\usuarios.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f271355547e80_88376263',
  'file_dependency' => 
  array (
    '71728280fd4457e5c370366e5848cba55926c3f5' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\usuarios\\templates\\usuarios.tpl',
      1 => 1596396332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f271355547e80_88376263 ($_smarty_tpl) {
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
			<table width="100%" border="0">
				<tr>
					<td width="33%">
						<table border="0">
							<tr>
							</tr>
						</table>
					</td>
					<td align="center" width="33%">
						<h2>USUARIOS</h2>
					</td>
					<td align="left" width="33%">
						<form name="formNuevo" method="post" action="usuario_nuevo.php">
							<a href="javascript:document.formNuevo.submit();">
							Nuevo>>>>
							</a>
						</form>
					</td>
				</tr>
			</table>
		</div>
		<center>
			<div class="listado">
				<table>
					<thead>
						<tr>
							<th>NRO</th><th>USUARIO</th><th>CLAVE</th><th>PERSONA</th>
							<th><img src="../../imagenes/modificar.gif"></th><th><img src="../../imagenes/borrar.jpeg"></th>
						</tr>
					</thead>
					<?php $_smarty_tpl->tpl_vars["b"] = new Smarty_Variable("1", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "b", 0);?>
					<?php
$_from = $_smarty_tpl->tpl_vars['usuarios']->value;
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
						<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['r']->value['usuario1'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['r']->value['clave'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];
echo $_smarty_tpl->tpl_vars['r']->value['am'];
echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</td>
						<td align="center">
							<form name="formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_usuario'];?>
" method="post" action="usuario_modificar.php">
							<input type="hidden" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_usuario'];?>
">
							<input type="hidden" name="id_persona" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_persona'];?>
">
							<a href="javascript:document.formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_usuario'];?>
.submit();" title="Modificar Usuarios">
								Modificar>>>
							</a>
							</form>
						</td>
						<td align="center">
							<form name="formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_usuario'];?>
" method="post" action="usuario_eliminar.php">
							<input type="hidden" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_usuario'];?>
">
							<a href="javascript:document.formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_usuario'];?>
.submit();" title="Eliminar Usuario" onclick='javascript:return(confirm("Desea realmente Eliminar al usuario :::<?php echo $_smarty_tpl->tpl_vars['r']->value['usuario1'];?>
?"));'>
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
