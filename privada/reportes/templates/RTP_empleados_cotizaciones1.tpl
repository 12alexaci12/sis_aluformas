<!DOCTYPE html>
<html>
     <head>
          <link rel="stylesheet" href="../{$direc_css}" type="text/css">
          <script type="text/javascript">
               var ventanaCalendario = false;
               function imprimir(){
                    if (confirm(' Desea Imprimir ?')) {
                         window.print();
                    }
               }
          </script>
     </head>
     <body>
          <table width=100% border="0">
               <tr>
                    <td width="33%">
                         <table>
                              <tr>
                              </tr>
                         </table>
                    </td>
                    <td align="center" width="33%">
                         <h1>EMPLEADOS COTIZACIONES</h1>
                    </td>
                    <td align="center" width="33%"></td>
               </tr>
          </table>
          <br>
          <center>
               <table border="1">
                    <tr>
                         <th>NRO</th>
                         <th>EMPLEADO</th>
                         <th>CLIENTE</th>
                         <th>TELEFONO DE CLIENTE</th>
                         <th>FECHA</th>
                         <th>PRECIO FINAL</th>
                    </tr>
                    {assign var="b" value="1"}
                    {foreach item=r from=$RTP_empleados_cotizaciones}
                    <tr>
                         <td align="center">{$b}</td>
                         <td>{$r.nombre_emp}</td>
                         <td>{$r.nombre_cli}</td>
                         <td>{$r.telefono}</td>
                         <td>{$r.fecha}</td>
                         <td>{$r.precio_final}</td>
                    </tr>
                    {assign var="b" value="`$b+1`"}
                    {/foreach}
               </table>
          </center>
     </body>
</html>
