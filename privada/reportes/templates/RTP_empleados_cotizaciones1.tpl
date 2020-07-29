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
          <div class="normal">
               <table width=100% border="0">
                    <tr>
                         <td width="33%">
                              <table>
                                   <tr>
                                   </tr>
                              </table>
                         </td>
                         <td align="center" width="33%">
                              <h2>EMPLEADOS COTIZACIONES</h2>
                         </td>
                         <td align="center" width="33%"></td>
                    </tr>
               </table>
          </div>
          <br>
          <center>
               <div class="listado">
                    <table>
                         <thead>
                              <tr>
                                   <th>NRO</th>
                                   <th>EMPLEADO</th>
                                   <th>CLIENTE</th>
                                   <th>TELF CLIENTE</th>
                                   <th>FECHA</th>
                                   <th>PRECIO FINAL</th>
                              </tr>
                         </thead>
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
               </div>
          </center>
     </body>
</html>
