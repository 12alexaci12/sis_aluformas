<?php
/* Smarty version 3.1.29, created on 2020-11-21 19:18:02
  from "D:\disenoWeb\www\sis_aluformas\privada\reportes\templates\rpt_perfiles_tipo_perfil.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fb967ea204f94_92083006',
  'file_dependency' => 
  array (
    '64524c81d6555f69db72015506c3717650ce6b16' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\reportes\\templates\\rpt_perfiles_tipo_perfil.tpl',
      1 => 1605986276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb967ea204f94_92083006 ($_smarty_tpl) {
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
                    tipo_perfil = document.formu.tipo_perfil.value;
                    if (document.formu.tipo_perfil.value == ""){
                         alert("por favor seleccione la tipo_perfil de perfil");
                         document.formu.tipo_perfil.focus();
                         return;
                    }
                    ventanaCalendario = window.open("rpt_perfiles_tipo_perfil1.php?tipo_perfil=" + tipo_perfil , "calendario", "width=600, height=550, left=100, top=100, scrollbars=yes, menubars=no, statusbar=no, status=no, resizable=yes, location=no")
               }
          <?php echo '</script'; ?>
>
     </head>
     <body>
          <br><br><br><br>
          <center>
               <h2> REPORTES DE PERFILES POR TIPO DE PERFIL</h2>
               <form name="formu" method="post">
                    <table>
                         <tr>
                              <th>*Seleccione tipo_perfil</th><th>:</th>
                              <td>
                                   <select name="tipo_perfil">
                                        <?php
$_from = $_smarty_tpl->tpl_vars['tipo_perfil']->value;
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
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_tipo_perfil'];?>
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
