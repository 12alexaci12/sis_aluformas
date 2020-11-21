<?php
/* Smarty version 3.1.29, created on 2020-11-21 14:47:54
  from "D:\disenoWeb\www\sis_aluformas\privada\reportes\templates\rpt_perfiles_tipo_perfil1.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fb9289a9bf857_19261034',
  'file_dependency' => 
  array (
    'a019184db7e6529d894bde919bfb5ac20fca4772' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\reportes\\templates\\rpt_perfiles_tipo_perfil1.tpl',
      1 => 1605970072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb9289a9bf857_19261034 ($_smarty_tpl) {
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
                         <h2>perfiles -- tipo_perfil</h2>
                    </td>
               </tr>
          </table>
          <br>
          <center>
               <table border="1">
                    <tr>
                         <th>NRO</th><th>Nombre</th><th>Linea</th><th>Color</th><th>Largo</th><th>precio</th>
                    </tr>
                    <?php $_smarty_tpl->tpl_vars["b"] = new Smarty_Variable("1", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "b", 0);?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['perfiles_tipo_perfil1']->value;
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
					<td><?php echo $_smarty_tpl->tpl_vars['r']->value['Nombre_Perfil'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['r']->value['Linea_Perfil'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['r']->value['Color'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['r']->value['largo'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['r']->value['Precio_de_Perfil'];?>
</td>
                    <?php $_smarty_tpl->tpl_vars["b"] = new Smarty_Variable($_smarty_tpl->tpl_vars['b']->value+1, null);
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
               <b>Fecha : </b> <?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>

          </center>
     </body>
</html>
<?php }
}
