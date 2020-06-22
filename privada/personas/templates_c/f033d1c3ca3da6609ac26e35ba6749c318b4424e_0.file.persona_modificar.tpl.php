<?php
/* Smarty version 3.1.29, created on 2020-06-22 19:37:16
  from "D:\disenoWeb\www\sis_aluformas\privada\personas\templates\persona_modificar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ef1086c12c867_76628852',
  'file_dependency' => 
  array (
    'f033d1c3ca3da6609ac26e35ba6749c318b4424e' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\personas\\templates\\persona_modificar.tpl',
      1 => 1592854628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef1086c12c867_76628852 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
          <?php echo '<script'; ?>
 type="text/javascript" src="js/expresiones_regulares.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 type="text/javascript" src="js/validar_persona.js"><?php echo '</script'; ?>
>
     </head>
     <body>
          <h1>MODIFICAR PERSONA</h1>
          <center>
               <form action="persona_modificar1.php" method="post" name="formu">
                    <table border="1">
                         <?php
$_from = $_smarty_tpl->tpl_vars['persona']->value;
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
                              <th>CI (*)</th><th>:</th>
                              <td> <input type="text" name="ci" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['ci'];?>
"> </td>
                         </tr>
                         <tr>
                              <th>Nombres (*)</th><th>:</th>
                              <td> <input type="text" name="nombre" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
"> </td>
                         </tr>
                         <tr>
                              <th>Apellido Paterno (*)</th><th>:</th>
                              <td> <input type="text" name="ap" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
"> </td>
                         </tr>
                         <tr>
                              <th>Apellido Materno (*)</th><th>:</th>
                              <td> <input type="text" name="am" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['am'];?>
"> </td>
                         </tr>
                         <tr>
                              <th>Direccion (*)</th><th>:</th>
                              <td> <input type="text" name="direccion" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['direccion'];?>
"> </td>
                         </tr>
                         <tr>
                              <th>Telefono (*)</th><th>:</th>
                              <td> <input type="text" name="telefono" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['telefono'];?>
"> </td>
                         </tr>
                         <tr>
						<th align="right">Genero(*)</th>
						<th>:</th>
						<td><input type="radio" name="genero" value="F">Femenino<input type="radio" name="genero" value="M">Masculino</td>
					</tr>
                         <tr>
                              <td align="center" colspan="3">
                                   <input type="hidden" name="accion" value="">
                                   <input type="hidden" name="id_persona" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_persona'];?>
">
                                   <input type="button" name="Aceptar" value="Aceptar" onclick="validar();">
                                   <input type="button" name="Cancelar" value="Cancelar" onclick="javascript:location.href='personas.php';">
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
                    <table>
                         <tr>
                              <td colspan="3" align="center"> <b>(*) Campos Obligatorios</b> </td>
                         </tr>
                    </table>
               </form>
          </center>
     </body>
</html>
<?php }
}
