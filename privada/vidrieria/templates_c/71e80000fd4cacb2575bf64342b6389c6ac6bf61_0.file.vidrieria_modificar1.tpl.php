<?php
/* Smarty version 3.1.29, created on 2020-08-02 21:33:46
  from "D:\disenoWeb\www\sis_aluformas\privada\vidrieria\templates\vidrieria_modificar1.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f27313abaa122_39366878',
  'file_dependency' => 
  array (
    '71e80000fd4cacb2575bf64342b6389c6ac6bf61' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\vidrieria\\templates\\vidrieria_modificar1.tpl',
      1 => 1596403912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f27313abaa122_39366878 ($_smarty_tpl) {
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
               <a href="vidrieria_modificar.php?id_vidrieria=<?php echo $_smarty_tpl->tpl_vars['id_vidrieria']->value;?>
"><input type="button" name="Volver" value="Volver>>>>>>"></a>
          </center>
     </body>
</html>
<?php }
}
