<?php
/* Smarty version 3.1.29, created on 2020-06-23 01:15:53
  from "D:\disenoWeb\www\sis_aluformas\privada\reportes\templates\RTP_empleados_cotizaciones1.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ef157c98e4668_45092807',
  'file_dependency' => 
  array (
    '2a09224606101f1960c0b859b3215c9c8c69b04d' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\reportes\\templates\\RTP_empleados_cotizaciones1.tpl',
      1 => 1592874945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef157c98e4668_45092807 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
     <head>
          <link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
          <?php echo '<script'; ?>
 type="text/javascript">
               var ventanaCalendario = false;
               function imprimir(){
                    if (confirm(' Desea Imprimir ?')) {
                         window.print();
                    }
               }
          <?php echo '</script'; ?>
>
     </head>
     <body>
          <table width=100% border="0">
               <tr>
                    <td width="33%">
                         <table>
                              <tr>
                              </tr>
                         </table>
                    </td>
                    <td align="center" width="33%">
                         <h1>EMPLEADOS COTIZACIONES</h1>
                    </td>
                    <td align="center" width="33%"></td>
               </tr>
          </table>
          <br>
          <center>
               <table border="1">
                    <tr>
                         <th>NRO</th>
                         <th>EMPLEADO</th>
                         <th>CLIENTE</th>
                         <th>TELEFONO DE CLIENTE</th>
                         <th>FECHA</th>
                         <th>PRECIO FINAL</th>
                    </tr>
                    <?php $_smarty_tpl->tpl_vars["b"] = new Smarty_Variable("1", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "b", 0);?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['RTP_empleados_cotizaciones']->value;
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
                         <td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
                         <td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre_emp'];?>
</td>
                         <td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre_cli'];?>
</td>
                         <td><?php echo $_smarty_tpl->tpl_vars['r']->value['telefono'];?>
</td>
                         <td><?php echo $_smarty_tpl->tpl_vars['r']->value['fecha'];?>
</td>
                         <td><?php echo $_smarty_tpl->tpl_vars['r']->value['precio_final'];?>
</td>
                    </tr>
                    <?php $_smarty_tpl->tpl_vars["b"] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['b']->value+1), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "b", 0);?>
                    <?php
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_0_saved_local_item;
}
if ($__foreach_r_0_saved_item) {
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_0_saved_item;
}
?>
               </table>
          </center>
     </body>
</html>
<?php }
}
