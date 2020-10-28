<?php
/* Smarty version 3.1.29, created on 2020-10-28 16:54:46
  from "D:\disenoWeb\www\sis_aluformas\privada\reportes\templates\rpt_personas_genero1.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f99a256d86568_77574384',
  'file_dependency' => 
  array (
    '2a14a89ddef4279c5600a3a0c441596541f4eb90' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\reportes\\templates\\rpt_personas_genero1.tpl',
      1 => 1603904079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f99a256d86568_77574384 ($_smarty_tpl) {
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
                         <img src="../../imagenes/easdasd" width="70%">
                    </td>
                    <td align="center" width="80%">
                         <h2>PERSONAS -- GENERO</h2>
                    </td>
               </tr>
          </table>
          <br>
          <center>
               <table border="1">
                    <tr>
                         <th>NRO</th><th>AP</th><th>AM</th><th>NOMBRES</th><th>GENERO</th>
                    </tr>
                    <?php $_smarty_tpl->tpl_vars["b"] = new Smarty_Variable("1", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "b", 0);?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['personas_genero1']->value;
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
                         <td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</td>
                         <td><?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
</td>
                         <td><?php echo $_smarty_tpl->tpl_vars['r']->value['am'];?>
</td>
                         <td><?php if ($_smarty_tpl->tpl_vars['r']->value['genero'] == 'F') {?>Femenino<?php } else { ?>Masculino<?php }?></td>
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
