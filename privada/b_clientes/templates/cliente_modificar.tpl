<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <link rel="stylesheet" href="../{$direc_css}" type="text/css">
          <script type="text/javascript" src="js/expresiones_regulares.js"></script>
          <script type="text/javascript" src="js/validar_cliente.js"></script>
     </head>
     <body>
          <br><br><br><br>
          <center>
               <h2>MODIFICAR CLIENTE</h2>
               <form action="cliente_modificar1.php" method="post" name="formu">
                    <table>
                         <tr>
                              <th align="right">banco (*)</th><th align="top">:</th>
                              <td>
                                   <select name="id_banco">
                                        {foreach item=r from=$banco}
                                        <option value="{$r.id_banco}">{$r.nombre}</option>
                                        {/foreach}
                                        {foreach item=r from=$bancos}
                                        <option value="{$r.id_banco}">{$r.nombre}</option>
                                        {/foreach}
                                   </select>
                              </td>
                         </tr>
                         {foreach item=r from=$clientes}
                         <tr>
                              <th align="left">Nombre</th><th>:</th>
                              <td> <input type="text" name="nombre" onkeyup="this.value=this.value.toUpperCase()" value="{$r.nombre}"> </td>
                         </tr>
                         <tr>
                              <th align="left">ci</th><th>:</th>
                              <td> <input type="text" name="ci" onkeyup="this.value=this.value.toUpperCase()" value="{$r.nombre}"> </td>
                         </tr>
                         <tr>
                              <th align="left">A Paterno</th><th>:</th>
                              <td> <input type="text" name="ap" onkeyup="this.value=this.value.toUpperCase()" value="{$r.nombre}"> </td>
                         </tr>
                         <tr>
                              <th align="left">A Materno</th><th>:</th>
                              <td> <input type="text" name="am" onkeyup="this.value=this.value.toUpperCase()" value="{$r.nombre}"> </td>
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
                              <td align="center" colspan="3">
                                   <input type="hidden" name="accion" value="">
                                   <input type="hidden" name="id_cliente" value="{$r.id_cliente}">
                                   <input type="button" name="Aceptar" value="Aceptar" onclick="validar();">
                                   <input type="button" name="Cancelar" value="Cancelar" onclick="javascript:location.href='clientes.php';">
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
