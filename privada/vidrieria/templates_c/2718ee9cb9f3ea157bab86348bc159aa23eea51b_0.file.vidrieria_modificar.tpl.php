<?php
/* Smarty version 3.1.29, created on 2020-08-02 21:52:15
  from "D:\disenoWeb\www\sis_aluformas\privada\vidrieria\templates\vidrieria_modificar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f27358f67a942_31252804',
  'file_dependency' => 
  array (
    '2718ee9cb9f3ea157bab86348bc159aa23eea51b' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\vidrieria\\templates\\vidrieria_modificar.tpl',
      1 => 1596405125,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f27358f67a942_31252804 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
          <?php echo '<script'; ?>
 type="text/javascript" src="js/expresiones_regulares.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 type="text/javascript" src="js/validar_vidrieria.js"><?php echo '</script'; ?>
>
     </head>
     <body>
          <br><br><br><br>
          <center>
               <h2>MODIFICAR VIDRIERIA</h2>
               <form action="vidrieria_modificar1.php" method="post" name="formu">
                    <table>
                         <?php
$_from = $_smarty_tpl->tpl_vars['vidrieria']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_r_0_saved_item = isset($_smarty_tpl->tpl_vars['r']) ? $_smarty_tpl->tpl_vars['r'] : false;
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$__foreach_r_0_saved_local_item = $_smarty_tpl->tpl_vars['r'];
?>
                         <tr>
                              <th align="left">Nombre</th><th>:</th>
                              <td> <input type="text" name="nombre" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
"> </td>
                         </tr>
                         <tr>
                              <th align="left">Telefono</th><th>:</th>
                              <td> <input type="text" name="telefono" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['telefono'];?>
"> </td>
                         </tr>
                         <tr>
                              <th align="left">Direccion</th><th>:</th>
                              <td> <input type="text" name="direccion" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['direccion'];?>
"> </td>
                         </tr>
                         <tr>
                              <td align="center" colspan="3">
                                   <input type="hidden" name="accion" value="">
                                   <input type="hidden" name="id_vidrieria" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_vidrieria'];?>
">
                                   <input type="button" name="Aceptar" value="Aceptar" onclick="validar();">
                                   <input type="button" name="Cancelar" value="Cancelar" onclick="javascript:location.href='vidrieria.php';">
                              </td>
                         </tr>
                         <?php
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_0_saved_local_item;
}
if ($__foreach_r_0_saved_item) {
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_0_saved_item;
}
?>
                         <tr>
                              <td colspan="3" align="center"> <b>(*) Campos Obligatorios</b> </td>
                         </tr>
                    </table>
               </form>
          </center>
     </body>
</html>
<?php }
}
