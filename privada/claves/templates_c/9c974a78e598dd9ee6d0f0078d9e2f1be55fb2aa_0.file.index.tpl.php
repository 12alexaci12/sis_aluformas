<?php
/* Smarty version 3.1.29, created on 2020-03-27 18:33:39
  from "C:\wamp64\www\Sis_internet_1\privada\claves\templates\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e7e4703a54899_45566164',
  'file_dependency' => 
  array (
    '9c974a78e598dd9ee6d0f0078d9e2f1be55fb2aa' => 
    array (
      0 => 'C:\\wamp64\\www\\Sis_internet_1\\privada\\claves\\templates\\index.tpl',
      1 => 1583382024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7e4703a54899_45566164 ($_smarty_tpl) {
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
