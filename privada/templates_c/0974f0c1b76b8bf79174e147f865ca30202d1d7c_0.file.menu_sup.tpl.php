<?php
/* Smarty version 3.1.29, created on 2020-06-15 20:24:53
  from "D:\disenoWeb\www\sis_aluformas\privada\templates\menu_sup.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ee7d915d50452_36373053',
  'file_dependency' => 
  array (
    '0974f0c1b76b8bf79174e147f865ca30202d1d7c' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\templates\\menu_sup.tpl',
      1 => 1583994078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee7d915d50452_36373053 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
      <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
">
  </head>
  
  <body>
    <table border="1" align="center" width="100%" height="100%" cellspacing="0" bordercolor="white">
      <tr>
        <td width="10%" rowspan="2">
          <img src="" width="100%">
        </td>
        <td colspan="4">
          <font face="Tahoma" size="7" color="#ffffff">AGENCIA DE EMPLEOS</font>
        </td>
      </tr>
      <tr>
        <th>Usuario:<?php echo $_smarty_tpl->tpl_vars['sesion']->value['usuario1'];?>
</th>
        <th>Rol:<?php echo $_smarty_tpl->tpl_vars['sesion']->value['rol'];?>
</th>
      </tr>
    </table>
  </body>
</html>
<?php }
}
