<?php
/* Smarty version 3.1.29, created on 2020-08-02 01:48:28
  from "C:\wamp64\www\sis_aluformas\privada\claves\templates\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f261b6c22e4d0_94700917',
  'file_dependency' => 
  array (
    '24f71e027ed0df91c8e58953cc7ed11df026ac68' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_aluformas\\privada\\claves\\templates\\index.tpl',
      1 => 1595027906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f261b6c22e4d0_94700917 ($_smarty_tpl) {
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
