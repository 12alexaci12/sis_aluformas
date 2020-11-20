<?php
/* Smarty version 3.1.29, created on 2020-11-20 02:03:15
  from "D:\disenoWeb\www\sis_aluformas\privada\reportes\templates\fichas_tec_clientes.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fb723e303dcd1_47235778',
  'file_dependency' => 
  array (
    'ea7b848c367a1f1c617362e993504ff9bcc926eb' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\reportes\\templates\\fichas_tec_clientes.tpl',
      1 => 1605837787,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb723e303dcd1_47235778 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <meta charset="utf-8">
          <link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
          <?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 type="text/javascript">
     		function buscar(){
     			var d1, contenedor, url;
     			contenedor = document.getElementById('clientes1');
     			d1 = document.formu1.nombre.value;
     			d2 = document.formu1.direccion.value;
     			d3 = document.formu1.telefono.value;
     			ajax = nuevoAjax();
     			url = "ajax_buscar_clientes.php";
     			param = "nombre="+d1+"&direccion="+d2+"&telefono="+d3;
     			ajax.open("POST", url, true);
     			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded')
     			ajax.onreadystatechange = function(){
     				if (ajax.readyState == 4) {
     					contenedor.innerHTML = ajax.responseText;
     				}
     			}
     			ajax.send(param);
     		}
               function mostrar(id_cliente){
                    d1 = id_cliente
                    ventanaCalendario = window.open("fichas_tec_clientes1.php?id_clientes1=" + d1 , "calendario", "width=600, height=550, left=100, top=100, scrollbars=yes, menubars=no, statusbar=no, status=no, resizable=yes, location=no")
               }
     	<?php echo '</script'; ?>
>
     </head>
     <body>
          <br><br><br>
          <center>
               <h2> FICHAS TECNICAS DE CLIENTES</h2>
               <form action="#" method="post" name="formu1">
                    <table width="50%">
                         <tr>
                              <th>
                                   <b>nombre</b>
                                   <input type="text" name="nombre" value="" size="10" onkeyup="buscar()">
                              </th>
                              <th>
                                   <b>direccion</b>
                                   <input type="text" name="direccion" value="" size="10" onkeyup="buscar()">
                              </th>
                              <th>
                                   <b>telefono</b>
                                   <input type="text" name="telefono" value="" size="10" onkeyup="buscar()">
                              </th>
                         </tr>
                    </table>
               </form>
               <div class="listado" id="clientes1"></div>
          </center>
     </body>
</html>
<?php }
}
