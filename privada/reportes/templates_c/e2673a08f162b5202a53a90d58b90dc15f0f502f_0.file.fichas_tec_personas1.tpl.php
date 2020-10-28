<?php
/* Smarty version 3.1.29, created on 2020-10-28 16:49:27
  from "D:\disenoWeb\www\sis_aluformas\privada\reportes\templates\fichas_tec_personas1.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f99a1177353c3_85174681',
  'file_dependency' => 
  array (
    'e2673a08f162b5202a53a90d58b90dc15f0f502f' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\reportes\\templates\\fichas_tec_personas1.tpl',
      1 => 1603903749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f99a1177353c3_85174681 ($_smarty_tpl) {
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
                         <h2>FICHA TECNICA DE PERSONA</h2>
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
$_from = $_smarty_tpl->tpl_vars['personas']->value;
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
                                        <th align="right">CI</th><th>:</th>
                                        <td> <input type="text" name="ci" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['ci'];?>
" disabled=""> </td>
                                   </tr>
                                   <tr>
                                        <th align="right">Nombres</th><th>:</th>
                                        <td> <input type="text" name="ci" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
" disabled=""> </td>
                                   </tr>
                                   <tr>
                                        <th align="right">Apellido Paterno</th><th>:</th>
                                        <td> <input type="text" name="ci" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
" disabled=""> </td>
                                   </tr>
                                   <tr>
                                        <th align="right">Apellido Materno</th><th>:</th>
                                        <td> <input type="text" name="ci" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['am'];?>
" disabled=""> </td>
                                   </tr>
                                   <tr>
                                        <th align="right">Direccion</th><th>:</th>
                                        <td> <input type="text" name="ci" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['direccion'];?>
" disabled=""> </td>
                                   </tr>
                                   <tr>
                                        <th align="right">Telefono</th><th>:</th>
                                        <td> <input type="text" name="ci" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['telefono'];?>
" disabled=""> </td>
                                   </tr>
                                   <tr>
                                        <th align="right">genero</th><th>:</th>
                                        <td>
                                             <?php if ($_smarty_tpl->tpl_vars['r']->value['genero'] == 'M') {?> <input type="text" name="genero" value="Masculino" disabled=""><?php }?>
                                             <?php if ($_smarty_tpl->tpl_vars['r']->value['genero'] == 'F') {?> <input type="text" name="genero" value="Femenino" disabled=""><?php }?>
                                        </td>
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
