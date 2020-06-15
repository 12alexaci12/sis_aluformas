<?php
/* Smarty version 3.1.29, created on 2020-06-14 21:38:12
  from "C:\wamp64\www\Sis_aluformas_1\privada\templates\menu_sup.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ee698c415b033_11909702',
  'file_dependency' => 
  array (
    '84b5844eb6da6c0e9dbdb6a35c5927d540b5e31d' => 
    array (
      0 => 'C:\\wamp64\\www\\Sis_aluformas_1\\privada\\templates\\menu_sup.tpl',
      1 => 1583994078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee698c415b033_11909702 ($_smarty_tpl) {
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
