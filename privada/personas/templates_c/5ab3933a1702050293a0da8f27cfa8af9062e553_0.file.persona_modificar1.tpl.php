<?php
/* Smarty version 3.1.29, created on 2020-07-29 02:26:47
  from "D:\disenoWeb\www\sis_aluformas\privada\personas\templates\persona_modificar1.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f20de67392983_97755265',
  'file_dependency' => 
  array (
    '5ab3933a1702050293a0da8f27cfa8af9062e553' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\personas\\templates\\persona_modificar1.tpl',
      1 => 1595989595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f20de67392983_97755265 ($_smarty_tpl) {
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
"><input type="button" name="Volver" value="Volver>>>>>>"></a>
          </center>
     </body>
</html>
<?php }
}
