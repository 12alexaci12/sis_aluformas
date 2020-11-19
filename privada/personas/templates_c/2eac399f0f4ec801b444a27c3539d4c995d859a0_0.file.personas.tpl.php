<?php
/* Smarty version 3.1.29, created on 2020-03-27 18:31:55
  from "C:\wamp64\www\Sis_internet_1\privada\personas\templates\personas.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e7e469bd3c1c0_73401867',
  'file_dependency' => 
  array (
    '2eac399f0f4ec801b444a27c3539d4c995d859a0' => 
    array (
      0 => 'C:\\wamp64\\www\\Sis_internet_1\\privada\\personas\\templates\\personas.tpl',
      1 => 1583814752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7e469bd3c1c0_73401867 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<table width="100%" border="0">
			<tr>
				<td width="33%">
					<table border="0">
						<tr>
						</tr>
					</table>
				</td>
				<td align="center" width="33%">
					<h1>PERSONAS</h1>
				</td>
				<td align="right" width="33%">
					<form name="formNuevo" method="post" action="persona_nuevo.php">
						<a href="javascript:document.formNuevo.submit();">
						Nuevo>>>>
						</a>
					</form>
				</td>
			</tr>
		</table>
		<center>
			<table class="listado">
				<tr>
					<th>NRO</th><th>CI</th><th>NOMBRES</th><th>AP</th><th>AM</th>
					<th align="center"><img src="../../img/modificar.gif" height="30px"></th><th align="center"><img src="../../img/borrar.gif" height="30px"></th>
				</tr>
				<?php $_smarty_tpl->tpl_vars["b"] = new Smarty_Variable("1", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "b", 0);?>
				<?php
$_from = $_smarty_tpl->tpl_vars['personas']->value;
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
					<td><?php echo $_smarty_tpl->tpl_vars['r']->value['ci'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
</td>
					<td align="center"><?php echo $_smarty_tpl->tpl_vars['r']->value['am'];?>
</td>
					<td align="center">
						<form name="formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_persona'];?>
" method="post" action="persona_modificar.php">
						<input type="hidden" name="id_persona" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_persona'];?>
">
						<a href="javascript:document.formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_persona'];?>
.submit();" title="Modificar Persona Sistema"> 
							Modificar>>>
						</a>	
						</form>
					</td>
					<td>	
						<form name="formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_persona'];?>
" method="post" action="persona_eliminar.php">
						<input type="hidden" name="id_persona" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_persona'];?>
">
						<a href="javascript:document.formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_persona'];?>
.submit();" title="Eliminar Persona Sistema" onclick='javascript: return(confirm("Desea realmente Eliminar a la persona..?"));'>
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
		</center>
	</body>
</html><?php }
}
