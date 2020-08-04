<?php
/* Smarty version 3.1.29, created on 2020-08-04 01:32:44
  from "D:\disenoWeb\www\sis_aluformas\privada\b_clientes\templates\cliente_modificar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f28babc7fb5e8_87758309',
  'file_dependency' => 
  array (
    'a473dab1197ffbff17abdb3654f3352a8b2303a9' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\b_clientes\\templates\\cliente_modificar.tpl',
      1 => 1596504758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f28babc7fb5e8_87758309 ($_smarty_tpl) {
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
 type="text/javascript" src="js/validar_cliente.js"><?php echo '</script'; ?>
>
     </head>
     <body>
          <br><br><br><br>
          <center>
               <h2>MODIFICAR CLIENTE</h2>
               <form action="cliente_modificar1.php" method="post" name="formu">
                    <table>
                         <tr>
                              <th align="right">banco (*)</th><th align="top">:</th>
                              <td>
                                   <select name="id_banco">
                                        <?php
$_from = $_smarty_tpl->tpl_vars['banco']->value;
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
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_banco'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_0_saved_local_item;
}
if ($__foreach_r_0_saved_item) {
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_0_saved_item;
}
?>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['bancos']->value;
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
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_banco'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
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
$_from = $_smarty_tpl->tpl_vars['clientes']->value;
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
                              <th align="left">Nombre</th><th>:</th>
                              <td> <input type="text" name="nombre" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
"> </td>
                         </tr>
                         <tr>
                              <th align="left">ci</th><th>:</th>
                              <td> <input type="text" name="ci" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
"> </td>
                         </tr>
                         <tr>
                              <th align="left">A Paterno</th><th>:</th>
                              <td> <input type="text" name="ap" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
"> </td>
                         </tr>
                         <tr>
                              <th align="left">A Materno</th><th>:</th>
                              <td> <input type="text" name="am" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
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
                                   <input type="hidden" name="id_cliente" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_cliente'];?>
">
                                   <input type="button" name="Aceptar" value="Aceptar" onclick="validar();">
                                   <input type="button" name="Cancelar" value="Cancelar" onclick="javascript:location.href='clientes.php';">
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
                              <td colspan="3" align="center"> <b>(*) Campos Obligatorios</b> </td>
                         </tr>
                    </table>
               </form>
          </center>
     </body>
</html>
<?php }
}
