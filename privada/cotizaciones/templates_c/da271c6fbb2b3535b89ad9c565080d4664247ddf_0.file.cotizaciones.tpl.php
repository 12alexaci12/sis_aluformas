<?php
/* Smarty version 3.1.29, created on 2020-08-02 01:52:08
  from "C:\wamp64\www\sis_aluformas\privada\cotizaciones\templates\cotizaciones.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f261c480b5a71_03573208',
  'file_dependency' => 
  array (
    'da271c6fbb2b3535b89ad9c565080d4664247ddf' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_aluformas\\privada\\cotizaciones\\templates\\cotizaciones.tpl',
      1 => 1596331108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f261c480b5a71_03573208 ($_smarty_tpl) {
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
						<h2>PERSONAS</h2>
					</td>
					<td align="left" width="33%">
						<form name="formNuevo" method="post" action="persona_nuevo.php">
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
						<th>NRO</th><th>empleado</th><th>cliente</th><th>fecha</th><th>precio</th><th align="center"><bold>+</bold></th>
						<th align="center"><img src="../../img/modificar.gif" height="30px"></th><th align="center"><img src="../../img/borrar.gif" height="30px"></th>
					</tr>
				</thead>
				<?php $_smarty_tpl->tpl_vars["b"] = new Smarty_Variable("1", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "b", 0);?>
				<?php
$_from = $_smarty_tpl->tpl_vars['cotizaciones']->value;
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
                         <td ><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['r']->value['empleado'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['r']->value['cliente'];?>
</td>
					<td ><?php echo $_smarty_tpl->tpl_vars['r']->value['fecha'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['r']->value['precio_final'];?>
</td>
					<td>
                              <form name="formdetalles" action="detalles.php" method="post">
                                   <a href="detalles.php?id_cotizacion=<?php echo $_smarty_tpl->tpl_vars['r']->value['id_cotizacion'];?>
">detalles</a>
                              </form>
                         </td>
					<td>
                              Modificar>>>
					</td>
					<td>
                              Eliminar>>>
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
