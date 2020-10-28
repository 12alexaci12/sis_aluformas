<?php
/* Smarty version 3.1.29, created on 2020-10-28 22:46:44
  from "D:\disenoWeb\www\sis_aluformas\privada\reportes\templates\fichas_tec_empleados1.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f99f4d40e3bd9_10266860',
  'file_dependency' => 
  array (
    'a155aad259809564551e4b3b6d4172e2e0d840e2' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\reportes\\templates\\fichas_tec_empleados1.tpl',
      1 => 1603924689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f99f4d40e3bd9_10266860 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <meta charset="utf-8">
          <?php echo '<script'; ?>
 type="text/javascript">
               var ventanaCalendario = false;
               function imprimir(){
                    if (confirm(' Desea Imprimir?')) {
                         window.print();
                    }
               }
          <?php echo '</script'; ?>
>
     </head>
     <body style="cursor:pointer;cursor:hand" onclick="imprimir();">
          <table width="100%" border="0">
               <tr>
                    <td>
                         <img src="../../img/bitmap1.svg" width="70%">
                    </td>
                    <td align="center" width="80%">
                         <h2>FICHA TECNICA DE EMPLEADO</h2>
                    </td>
               </tr>
          </table>
          <br>
          <center>
               <table border="1">
                    <tr>
                         <td>
                              <table border="0">
                              <?php
$_from = $_smarty_tpl->tpl_vars['empleados']->value;
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
                                        <th align="right">Nombre</th><th>:</th>
                                        <td> <input type="text" name="ci" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
" disabled=""> </td>
                                   </tr>
                                   <tr>
                                        <th align="right">CI</th><th>:</th>
                                        <td> <input type="text" name="ci" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['ci'];?>
" disabled=""> </td>
                                   </tr>
                                   <tr>
                                        <th align="right">Telefono</th><th>:</th>
                                        <td> <input type="text" name="ci" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['telefono'];?>
" disabled=""> </td>
                                   </tr>
                              <?php
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_0_saved_local_item;
}
if ($__foreach_r_0_saved_item) {
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_0_saved_item;
}
?>
                              </table>
                         </td>
                    </tr>
               </table>
          </center>
     </body>
</html>
<?php }
}
