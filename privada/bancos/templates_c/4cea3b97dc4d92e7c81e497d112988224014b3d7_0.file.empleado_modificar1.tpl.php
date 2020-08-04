<?php
/* Smarty version 3.1.29, created on 2020-08-02 19:48:43
  from "D:\disenoWeb\www\sis_aluformas\privada\empleados\templates\empleado_modificar1.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f27189b0ad9f1_28132988',
  'file_dependency' => 
  array (
    '4cea3b97dc4d92e7c81e497d112988224014b3d7' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\empleados\\templates\\empleado_modificar1.tpl',
      1 => 1596397416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f27189b0ad9f1_28132988 ($_smarty_tpl) {
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
               <a href="empleado_modificar.php?id_empleado=<?php echo $_smarty_tpl->tpl_vars['id_empleado']->value;?>
"><input type="button" name="Volver" value="Volver>>>>>>"></a>
          </center>
     </body>
</html>
<?php }
}
