<?php
/* Smarty version 3.1.29, created on 2020-06-22 21:02:32
  from "D:\disenoWeb\www\sis_aluformas\privada\reportes\templates\RPT_empleados_cotizaciones.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ef11c680596f1_03263570',
  'file_dependency' => 
  array (
    '9cc50f2b040c802be60fbe819051e13eac1a5296' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\reportes\\templates\\RPT_empleados_cotizaciones.tpl',
      1 => 1592859748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef11c680596f1_03263570 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
          <?php echo '<script'; ?>
 type="text/javascript">
               var ventanaCalendario = false;
               function imprimir(){
                    ventanaCalendario = window.open("empleados_cotizaciones1.php", "calendario", "width=600, height=550, left=100, top=100, scrollbars=YES, menubars=NO, statusbar=NO, status=NO resizable=YES, location=NO");
               }
               function pdf(){
                    ventanaCalendario = window.open("pdf.php", "calendario", "width=600, height=550, left=100, top=100, scrollbars=YES, menubars=NO, statusbar=NO, status=NO resizable=YES, location=NO");
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
               <table>
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
                         <td>[$r.telefono_cli]</td>
                         <td><?php echo $_smarty_tpl->tpl_vars['r']->value['fecha'];?>
</td>
                         <td><?php echo $_smarty_tpl->tpl_vars['r']->value['precio_final'];?>
</td>
                         <?php $_smarty_tpl->tpl_vars["b"] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['b']->value+1), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "b", 0);?>
                         <?php
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_0_saved_local_item;
}
if ($__foreach_r_0_saved_item) {
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_0_saved_item;
}
?>
                    </tr>
               </table>
               <br><br>
               <table align="center" border="1">
                    <tr>
                         <td> <input type="radio" name="seleccionar" onclick="javascript:imprimir()"> Imprimir </td>
                         <td> <input type="radio" name="seleccionar" onclick="javascript:pdf()"> Exportar a PDF </td>
                    </tr>
               </table>
          </center>
     </body>
</html>
<?php }
}
