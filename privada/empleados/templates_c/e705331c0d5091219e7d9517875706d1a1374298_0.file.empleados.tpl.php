<?php
/* Smarty version 3.1.29, created on 2020-11-19 01:34:40
  from "D:\disenoWeb\www\sis_aluformas\privada\empleados\templates\empleados.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fb5cbb047afd3_37391882',
  'file_dependency' => 
  array (
    'e705331c0d5091219e7d9517875706d1a1374298' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\empleados\\templates\\empleados.tpl',
      1 => 1605749561,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb5cbb047afd3_37391882 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css" >
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		function buscar(){
			var d1, contenedor, url;
			contenedor = document.getElementById('empleados1');
			d1 = document.formu1.nombres.value;
			d2 = document.formu1.telefono.value;
			d3 = document.formu1.ci.value;
			ajax = nuevoAjax();
			url = "ajax_buscar_empleados.php";
			param = "nombres="+d1+"&telefono="+d2+"&ci="+d3;
			ajax.open("POST", url, true);
			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded')
			ajax.onreadystatechange = function(){
				if (ajax.readyState == 4) {
					contenedor.innerHTML = ajax.responseText;
				}
			}
			ajax.send(param);
		}
	<?php echo '</script'; ?>
>
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
			<center>
				<form action="#" method="post" name="formu1">
					<table width="50%">
						<tr>
							<th>
								<b>Nombres</b>
								<input type="text" name="nombres" value="" size="10" onkeyup="buscar()">
							</th>
							<th>
								<b>telefono</b>
								<input type="text" name="telefono" value="" size="10" onkeyup="buscar()">
							</th>
							<th>
								<b>ci</b>
								<input type="text" name="ci" value="" size="10" onkeyup="buscar()">
							</th>
						</tr>
					</table>
				</form>
			</center>
		</div>
		<div class="listado" id="empleados1">
		<center>
			<table>
				<thead>
					<tr>
						<th>NRO</th><th>nombre</th><th>ci</th><th>telefono</th>
						<th align="center"><img src="../../img/modificar.gif" height="30px"></th><th align="center"><img src="../../img/borrar.gif" height="30px"></th>
					</tr>
				</thead>
				<?php $_smarty_tpl->tpl_vars["b"] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "b", 0);?>
	               <?php $_smarty_tpl->tpl_vars["total"] = new Smarty_Variable($_smarty_tpl->tpl_vars['pagina']->value-1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "total", 0);?>
	               <?php $_smarty_tpl->tpl_vars["a"] = new Smarty_Variable($_smarty_tpl->tpl_vars['numreg']->value*$_smarty_tpl->tpl_vars['total']->value, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "a", 0);?>
	               <?php $_smarty_tpl->tpl_vars["b"] = new Smarty_Variable($_smarty_tpl->tpl_vars['b']->value+1+$_smarty_tpl->tpl_vars['a']->value, null);
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
			<div class="normal">
				<table>
					<tr align="center">
	                        <td>
	                            <?php if (!empty($_smarty_tpl->tpl_vars['urlback']->value)) {?>
	                            <a onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['urlback']->value;?>
'" style="font-family: Verdana; font-size: 14px; cursor:pointer;">&laquo;Anterior</a>
	                            <?php }?>
	                            <?php if (!empty($_smarty_tpl->tpl_vars['paginas']->value)) {?>
	                                <?php
$_from = $_smarty_tpl->tpl_vars['paginas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_pag_1_saved_item = isset($_smarty_tpl->tpl_vars['pag']) ? $_smarty_tpl->tpl_vars['pag'] : false;
$_smarty_tpl->tpl_vars['pag'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['pag']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pag']->value) {
$_smarty_tpl->tpl_vars['pag']->_loop = true;
$__foreach_pag_1_saved_local_item = $_smarty_tpl->tpl_vars['pag'];
?>
	                                    <?php if ($_smarty_tpl->tpl_vars['pag']->value['npag'] == $_smarty_tpl->tpl_vars['pagina']->value) {?>
	                                    <?php if ($_smarty_tpl->tpl_vars['pagina']->value != '1') {?> |<?php }?>
	                                    <b style="color:#fb992f; font-size:16px;"> <?php echo $_smarty_tpl->tpl_vars['pag']->value['npag'];?>
</b>
	                                    <?php } else { ?>
	                                    <a onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['pag']->value['pagV'];?>
'" style="cursor:pointer;"> <?php echo $_smarty_tpl->tpl_vars['pag']->value['npag'];?>
</a>
	                                    <?php }?>
	                                <?php
$_smarty_tpl->tpl_vars['pag'] = $__foreach_pag_1_saved_local_item;
}
if ($__foreach_pag_1_saved_item) {
$_smarty_tpl->tpl_vars['pag'] = $__foreach_pag_1_saved_item;
}
?>
	                            <?php }?>
	                            <?php if ($_smarty_tpl->tpl_vars['numpaginas']->value > $_smarty_tpl->tpl_vars['numbotones']->value && !empty($_smarty_tpl->tpl_vars['urlnext']->value) && $_smarty_tpl->tpl_vars['pagina']->value < $_smarty_tpl->tpl_vars['numpaginas']->value) {?>
	                            <a onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['urlnext']->value;?>
'" style="font-family: Verdana; font-size:14px; cursor:pointer;">Siguiente&laquo; </a>
	                            <?php }?>
	                        </td>
	                    </tr>
				</table>
			</div>
			</div>
		</center>
	</body>
</html>
<?php }
}
