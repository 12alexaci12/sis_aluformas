<?php
/* Smarty version 3.1.29, created on 2020-08-02 01:51:39
  from "C:\wamp64\www\sis_aluformas\privada\usuarios\templates\usuario_modificar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f261c2b7c7ae0_61926828',
  'file_dependency' => 
  array (
    '4e61d2b837e36351e56f5f872380a24056ed84ac' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_aluformas\\privada\\usuarios\\templates\\usuario_modificar.tpl',
      1 => 1596331108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f261c2b7c7ae0_61926828 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <meta charset="utf-8">
          <link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
          <?php echo '<script'; ?>
 type="text/javascript" src="js/expresiones_regulares.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 type="text/javascript" src="js/validar_usuario.js"><?php echo '</script'; ?>
>
     </head>
     <body>
          <br><br><br><br>
          <center>
               <h2>MODIFICAR USUARIO</h2>
               <form action="usuario_modificar1.php" method="post" name="formu">
                    <table>
                         <tr>
                              <th align="right">Persona (*)</th><th align="top">:</th>
                              <td>
                                   <select name="id_persona">
                                        <?php
$_from = $_smarty_tpl->tpl_vars['persona']->value;
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
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_persona'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
 - <?php echo $_smarty_tpl->tpl_vars['r']->value['am'];?>
 - <?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_0_saved_local_item;
}
if ($__foreach_r_0_saved_item) {
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_0_saved_item;
}
?>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['personas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_r_1_saved_item = isset($_smarty_tpl->tpl_vars['r']) ? $_smarty_tpl->tpl_vars['r'] : false;
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$__foreach_r_1_saved_local_item = $_smarty_tpl->tpl_vars['r'];
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_persona'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
 - <?php echo $_smarty_tpl->tpl_vars['r']->value['am'];?>
 - <?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_1_saved_local_item;
}
if ($__foreach_r_1_saved_item) {
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_1_saved_item;
}
?>
                                   </select>
                              </td>
                         </tr>
                         <?php
$_from = $_smarty_tpl->tpl_vars['usuario']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_r_2_saved_item = isset($_smarty_tpl->tpl_vars['r']) ? $_smarty_tpl->tpl_vars['r'] : false;
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$__foreach_r_2_saved_local_item = $_smarty_tpl->tpl_vars['r'];
?>
                         <tr>
                              <th>Usuario (*)</th><th>:</th>
                              <td><input type="text" name="usuario1" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['usuario1'];?>
"></td>
                         </tr>
                         <tr>
                              <th>Clave (*)</th><th>:</th>
                              <td><input type="text" name="clave" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['clave'];?>
"></td>
                         </tr>
                         <tr>
                              <td align="center" colspan="3">
                                   <input type="hidden" name="accion" value="" ="">
                                   <input type="hidden" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_usuario'];?>
">
                                   <input type="button" name="Aceptar" value="Aceptar" onclick="validar();">
                                   <input type="button" name="Cancelar" value="Cancelar" onclick="javascript:location.href='usuarios.php'">
                              </td>
                         </tr>
                         <?php
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_2_saved_local_item;
}
if ($__foreach_r_2_saved_item) {
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_2_saved_item;
}
?>
                         <tr>
                              <td colspan="3" align="center"> <b>(*)Campos Obligatorios</b> </td>
                         </tr>
                    </table>
               </form>
          </center>
     </body>
</html>
<?php }
}
