<?php
/* Smarty version 3.1.29, created on 2020-06-16 06:49:08
  from "D:\disenoWeb\www\sis_aluformas\privada\usuarios\templates\usuario_modificar1.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ee86b64c183a6_67428871',
  'file_dependency' => 
  array (
    '8a2287e07f152a2203390e74fe168563941818e6' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\usuarios\\templates\\usuario_modificar1.tpl',
      1 => 1592290128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee86b64c183a6_67428871 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
     </head>
     <body>
          <center>
               <h2> <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
 </h2>
               <a href="usuario_modificar.php?id_usuario=<?php echo $_smarty_tpl->tpl_vars['id_usuario']->value;?>
"></a>
               <input type="button" name="Volver" value="Volver>>>>>">
          </center>
     </body>
</html>
<?php }
}
