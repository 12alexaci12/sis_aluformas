<?php
/* Smarty version 3.1.29, created on 2020-10-01 20:43:09
  from "D:\disenoWeb\www\sis_aluformas\privada\perfiles\templates\perfil_modificar1.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f763f5dca6938_92872598',
  'file_dependency' => 
  array (
    'eb26641fffab9257d0d86eeb562f0a0353e02c9b' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\perfiles\\templates\\perfil_modificar1.tpl',
      1 => 1601576013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f763f5dca6938_92872598 ($_smarty_tpl) {
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
               <a href="perfil_modificar.php?id_perfil=<?php echo $_smarty_tpl->tpl_vars['id_perfil']->value;?>
"><input type="button" name="Volver" value="Volver>>>>>>"></a>
          </center>
     </body>
</html>
<?php }
}
