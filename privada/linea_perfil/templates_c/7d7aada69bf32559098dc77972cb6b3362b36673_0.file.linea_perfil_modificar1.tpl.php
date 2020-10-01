<?php
/* Smarty version 3.1.29, created on 2020-10-01 21:34:41
  from "D:\disenoWeb\www\sis_aluformas\privada\linea_perfil\templates\linea_perfil_modificar1.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f764b71284a82_86061904',
  'file_dependency' => 
  array (
    '7d7aada69bf32559098dc77972cb6b3362b36673' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\linea_perfil\\templates\\linea_perfil_modificar1.tpl',
      1 => 1601587860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f764b71284a82_86061904 ($_smarty_tpl) {
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
               <a href="linea_perfil_modificar.php?id_linea_perfil=<?php echo $_smarty_tpl->tpl_vars['id_linea_perfil']->value;?>
"><input type="button" name="Volver" value="Volver>>>>>>"></a>
          </center>
     </body>
</html>
<?php }
}
