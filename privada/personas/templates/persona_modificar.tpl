<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <link rel="stylesheet" href="../{$direc_css}" type="text/css">
          <script type="text/javascript" src="js/expresiones_regulares.js"></script>
          <script type="text/javascript" src="js/validar_persona.js"></script>
     </head>
     <body>
          <h1>MODIFICAR PERSONA</h1>
          <center>
               <form action="persona_modificar1.php" method="post" name="formu">
                    <table border="1">
                         {foreach item=r from=$persona}
                         <tr>
                              <th>CI (*)</th><th>:</th>
                              <td> <input type="text" name="ci" onkeyup="this.value=this.value.toUpperCase()" value="{$r.ci}"> </td>
                         </tr>
                         <tr>
                              <th>Nombres (*)</th><th>:</th>
                              <td> <input type="text" name="nombres" onkeyup="this.value=this.value.toUpperCase()" value="{$r.nombre}"> </td>
                         </tr>
                         <tr>
                              <th>Apellido Paterno (*)</th><th>:</th>
                              <td> <input type="text" name="ap" onkeyup="this.value=this.value.toUpperCase()" value="{$r.ap}"> </td>
                         </tr>
                         <tr>
                              <th>Apellido Materno (*)</th><th>:</th>
                              <td> <input type="text" name="am" onkeyup="this.value=this.value.toUpperCase()" value="{$r.am}"> </td>
                         </tr>
                         <tr>
                              <th>Direccion (*)</th><th>:</th>
                              <td> <input type="text" name="direccion" onkeyup="this.value=this.value.toUpperCase()" value="{$r.direccion}"> </td>
                         </tr>
                         <tr>
                              <th>Telefono (*)</th><th>:</th>
                              <td> <input type="text" name="telefono" onkeyup="this.value=this.value.toUpperCase()" value="{$r.telefono}"> </td>
                         </tr>
                         <tr>
                              <td align="center" colspan="3">
                                   <input type="hidden" name="accion" value="" ="">
                                   <input type="hidden" name="id_persona" value="{$r.id_persona}">
                                   <input type="button" name="Aceptar" onclick="validar();">
                                   <input type="button" name="Cancelar" onclick="javascript:location.href='personas.php';">
                              </td>
                         </tr>
                         {/foreach}
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
