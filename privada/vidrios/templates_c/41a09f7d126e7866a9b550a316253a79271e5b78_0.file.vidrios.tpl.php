<?php
/* Smarty version 3.1.29, created on 2021-04-30 02:29:38
  from "D:\disenoWeb\www\sis_aluformas\privada\vidrios\templates\vidrios.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_608b6b92672e90_92046811',
  'file_dependency' => 
  array (
    '41a09f7d126e7866a9b550a316253a79271e5b78' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\vidrios\\templates\\vidrios.tpl',
      1 => 1619749773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608b6b92672e90_92046811 ($_smarty_tpl) {
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
						<h2>vidrios</h2>
					</td>
					<td align="left" width="33%">
						<form name="formNuevo" method="post" action="vidrio_nuevo.php">
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
						<th>NRO</th><th>Nombre</th><th>Color</th><th>Ancho</th><th>Alto</th>
						<th align="center"><img src="../../img/modificar.gif" height="30px"></th><th align="center"><img src="../../img/borrar.gif" height="30px"></th>
					</tr>
				</thead>
				<?php $_smarty_tpl->tpl_vars["b"] = new Smarty_Variable(1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "b", 0);?>
	               <?php
$_from = $_smarty_tpl->tpl_vars['vidrios']->value;
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
					<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre_vidrio'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['r']->value['Color'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['r']->value['ancho'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['r']->value['alto'];?>
</td>
                    	<td>
						<form name="formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_vidrio'];?>
" method="post" action="vidrio_modificar.php">
						<input type="hidden" name="id_vidrio" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_vidrio'];?>
">
						<input type="hidden" name="id_color" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_color'];?>
">
						<input type="hidden" name="id_tipo_vidrio" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_tipo_vidrio'];?>
">
						<a href="javascript:document.formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_vidrio'];?>
.submit();" title="Modificar vidrio Sistema">
							Modificar>>>
						</a>
						</form>
					</td>
					<td>
						<form name="formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_vidrio'];?>
" method="post" action="vidrio_eliminar.php">
						<input type="hidden" name="id_vidrio" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_vidrio'];?>
">
						<a href="javascript:document.formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_vidrio'];?>
.submit();" title="Eliminar vidrio Sistema" onclick='javascript: return(confirm("Desea realmente Eliminar al vidrio..?"));'>
							Eliminar>>>
						</a>
						</form>
					</td>
					<?php $_smarty_tpl->tpl_vars["b"] = new Smarty_Variable($_smarty_tpl->tpl_vars['b']->value+1, null);
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
