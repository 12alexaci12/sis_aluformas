<?php
/* Smarty version 3.1.29, created on 2020-11-20 01:44:23
  from "D:\disenoWeb\www\sis_aluformas\privada\reportes\templates\rpt_vidrios_color.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fb71f77d7f496_31635916',
  'file_dependency' => 
  array (
    'a13778d9a47716a61b515a4495d0d0333e7908f0' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\reportes\\templates\\rpt_vidrios_color.tpl',
      1 => 1605836659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb71f77d7f496_31635916 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direcc_css']->value;?>
" type="text/css">
          <meta charset="utf-8">
          <?php echo '<script'; ?>
 type="text/javascript">
               function validar(){
                    color = document.formu.color.value;
                    if (document.formu.color.value == ""){
                         alert("por favor seleccione un color");
                         document.formu.color.focus();
                         return;
                    }
                    ventanaCalendario = window.open("rpt_vidrios_color1.php?color=" + color , "calendario", "width=600, height=550, left=100, top=100, scrollbars=yes, menubars=no, statusbar=no, status=no, resizable=yes, location=no")
               }
          <?php echo '</script'; ?>
>
     </head>
     <body>
          <br><br>
          <center>
               <h2> REPORTES DE VIDRIOS POR COLOR</h2>
               <form name="formu" method="post">
                    <table>
                         <tr>
                              <th>*Seleccione color</th><th>:</th>
                              <td>
                                   <select name="color">
                                        <?php
$_from = $_smarty_tpl->tpl_vars['colores']->value;
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
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_color'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_0_saved_local_item;
}
if ($__foreach_r_0_saved_item) {
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_0_saved_item;
}
?>
                                   </select>
                              </td>
                         </tr>
                         <tr>
                              <td align="center" colspan="6">
                                   <input type="hidden" name="accion" value="">
                                   <input type="button" value="Aceptar" onclick="validar();">
                              </td>
                         </tr>
                    </table>
               </form>
          </center>
     </body>
</html>
<?php }
}
