<?php
/* Smarty version 3.1.29, created on 2020-08-02 05:05:32
  from "C:\wamp64\www\sis_aluformas\privada\propietarios\templates\propietarios_modificar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f26499c302c35_80465291',
  'file_dependency' => 
  array (
    '32a3dcc2f29f514e9d17217afeb272d7f54a9347' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_aluformas\\privada\\propietarios\\templates\\propietarios_modificar.tpl',
      1 => 1596344719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f26499c302c35_80465291 ($_smarty_tpl) {
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
 type="text/javascript" src="js/validar_propietario.js"><?php echo '</script'; ?>
>
     </head>
     <body>
          <br><br><br><br>
          <center>
               <h2>MODIFICAR PROPIETARIO</h2>
               <form action="propietarios_modificar1.php" method="post" name="formu">
                    <table>
                         <?php
$_from = $_smarty_tpl->tpl_vars['propietario']->value;
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
                              <th>Nombre</th><th>:</th>
                              <td> <input type="text" name="nombre" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
"> </td>
                         </tr>
                         <tr>
                              <th>CI</th><th>:</th>
                              <td> <input type="text" name="ci" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['ci'];?>
"> </td>
                         </tr>
                         <tr>
                              <th>Telefono</th><th>:</th>
                              <td> <input type="text" name="telefono" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['telefono'];?>
"> </td>
                         </tr>
                         <tr>
                              <td align="center" colspan="3">
                                   <input type="hidden" name="accion" value="">
                                   <input type="hidden" name="id_propietario" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_propietario'];?>
">
                                   <input type="button" name="Aceptar" value="Aceptar" onclick="validar();">
                                   <input type="button" name="Cancelar" value="Cancelar" onclick="javascript:location.href='propietarios.php';">
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
