<?php
/* Smarty version 3.1.29, created on 2020-06-16 04:32:23
  from "D:\disenoWeb\www\sis_aluformas\privada\personas\templates\persona_modificar1.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ee84b57d72ee1_92545504',
  'file_dependency' => 
  array (
    '5ab3933a1702050293a0da8f27cfa8af9062e553' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\personas\\templates\\persona_modificar1.tpl',
      1 => 1592188031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee84b57d72ee1_92545504 ($_smarty_tpl) {
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
               <a href="persona_modificar.php?id_persona=<?php echo $_smarty_tpl->tpl_vars['id_persona']->value;?>
"></a>
               <input type="button" name="Volver" value="Volver>>>>>>">
          </center>
     </body>
</html>
<?php }
}
