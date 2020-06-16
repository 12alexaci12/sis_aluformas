<?php
/* Smarty version 3.1.29, created on 2020-06-15 20:24:57
  from "D:\disenoWeb\www\sis_aluformas\privada\claves\templates\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ee7d919c3d6d3_44473273',
  'file_dependency' => 
  array (
    'ec0556831edb7c78122d616d56e58230d2c5dbfd' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\claves\\templates\\index.tpl',
      1 => 1583382024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee7d919c3d6d3_44473273 ($_smarty_tpl) {
?>
<!DOCTYPE html>
	<head>
		<link rel="stylesheet" type="text/css" href="../../css/colores.css">
		
			<?php echo '<script'; ?>
 >
				function refrescar(){
				var p = window.parent;
				p.location.href='../';
				}
			<?php echo '</script'; ?>
>
		
	</head>
	<body ONLOAD ="self.setTimeout('refrescar()',5000);">
		<center>
			<h1><?php echo $_smarty_tpl->tpl_vars['mensage']->value;?>
</h1>
			<br>
			<h1><?php echo $_smarty_tpl->tpl_vars['mensage1']->value;?>
</h1>
		</center>
	</body>
</html>
<?php }
}
