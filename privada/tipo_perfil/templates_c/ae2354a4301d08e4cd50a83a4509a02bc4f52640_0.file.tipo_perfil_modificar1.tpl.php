<?php
/* Smarty version 3.1.29, created on 2020-10-01 21:06:20
  from "D:\disenoWeb\www\sis_aluformas\privada\colores\templates\color_modificar1.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f7644cc9ab219_54366955',
  'file_dependency' => 
  array (
    'ae2354a4301d08e4cd50a83a4509a02bc4f52640' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\colores\\templates\\color_modificar1.tpl',
      1 => 1601585294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7644cc9ab219_54366955 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
     </head>
     <body>
          <center>
               <h2><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</h2>
               <a href="color_modificar.php?id_color=<?php echo $_smarty_tpl->tpl_vars['id_color']->value;?>
"><input type="button" name="Volver" value="Volver>>>>>>"></a>
          </center>
     </body>
</html>
<?php }
}
