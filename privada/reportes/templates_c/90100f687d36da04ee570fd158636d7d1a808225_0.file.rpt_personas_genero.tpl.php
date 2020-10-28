<?php
/* Smarty version 3.1.29, created on 2020-10-28 15:26:21
  from "D:\disenoWeb\www\sis_aluformas\privada\reportes\templates\rpt_personas_genero.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f998d9d7fd6b3_44876628',
  'file_dependency' => 
  array (
    '90100f687d36da04ee570fd158636d7d1a808225' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\reportes\\templates\\rpt_personas_genero.tpl',
      1 => 1603898776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f998d9d7fd6b3_44876628 ($_smarty_tpl) {
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
                    genero = document.formu.genero.value;
                    if (document.formu.genero.value == ""){
                         alert("por favor seleccione el genero");
                         document.formu.genero.focus();
                         return;
                    }
                    ventanaCalendario = window.open("rpt_personas_genero1.php?genero=" + genero , "calendario", "width=600, height=550, left=100, top=100, scrollbars=yes, menubars=no, statusbar=no, status=no, resizable=yes, location=no")
               }
          <?php echo '</script'; ?>
>
     </head>
     <body>
          <br><br>
          <center>
               <h2> REPORTES DE PERSONAS POR GENERO</h2>
               <form name="formu" method="post">
                    <table>
                         <tr>
                              <th>*Seleccione Genero</th><th>:</th>
                              <td>
                                   <select name="genero">
                                        <option value="">--Seleccione--</option>
                                        <option value="t">Todos</option>
                                        <option value="f">Femenino</option>
                                        <option value="m">Masculino</option>
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
