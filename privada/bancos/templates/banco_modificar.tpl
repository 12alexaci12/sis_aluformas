<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <link rel="stylesheet" href="../{$direc_css}" type="text/css">
          <script type="text/javascript" src="js/expresiones_regulares.js"></script>
          <script type="text/javascript" src="js/validar_banco.js"></script>
     </head>
     <body>
          <br><br><br><br>
          <center>
               <h2>MODIFICAR BANCO</h2>
               <form action="banco_modificar1.php" method="post" name="formu">
                    <table>
                         {foreach item=r from=$bancos}
                         <tr>
                              <th align="left">Nombre</th><th>:</th>
                              <td> <input type="text" name="nombre" onkeyup="this.value=this.value.toUpperCase()" value="{$r.nombre}"> </td>
                         </tr>
                         <tr>
                              <th align="left">Telefono</th><th>:</th>
                              <td> <input type="text" name="telefono" value="{$r.telefono}"> </td>
                         </tr>
                         <tr>
                              <th align="left">Direccion</th><th>:</th>
                              <td> <input type="text" name="direccion" onkeyup="this.value=this.value.toUpperCase()" value="{$r.direccion}"> </td>
                         </tr>
                         <tr>
                              <th align="left">URL</th><th>:</th>
                              <td> <input type="text" name="url" onkeyup="this.value=this.value.toUpperCase()" value="{$r.url}"> </td>
                         </tr>
                         <tr>
                              <td align="center" colspan="3">
                                   <input type="hidden" name="accion" value="">
                                   <input type="hidden" name="id_banco" value="{$r.id_banco}">
                                   <input type="button" name="Aceptar" value="Aceptar" onclick="validar();">
                                   <input type="button" name="Cancelar" value="Cancelar" onclick="javascript:location.href='bancos.php';">
                              </td>
                         </tr>
                         {/foreach}
                         <tr>
                              <td colspan="3" align="center"> <b>(*) Campos Obligatorios</b> </td>
                         </tr>
                    </table>
               </form>
          </center>
     </body>
</html>
