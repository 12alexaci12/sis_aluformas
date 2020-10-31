<?php
     if (isset($_SESSION["sesion_id_rol"])) {
          $sql = $db->Prepare("    SELECT ac.*, op.id_opcion, op.orden, op.contenido, gr.id_grupo, gr.grupo, op.opcion
                                   FROM accesos ac, opciones op, grupos gr
                                   WHERE ac.id_rol = '".$_SESSION["sesion_id_rol"]."'
                                   AND ac.id_opcion = op.id_opcion
                                   AND op.id_grupo = gr.id_grupo
                                   AND ac.estado <> '0'
                                   AND op.estado <> '0'
                                   AND gr.estado <> '0'
                                   ORDER BY op.id_grupo, op.orden
                                   ");
     $rs = $db->Execute($sql);

     $sql2 = $db->Prepare("   SELECT ac.*, op.id_opcion, op.orden, op.contenido, gr.id_grupo, gr.grupo, op.opcion
                              FROM accesos ac, opciones op, grupos gr
                              WHERE ac.id_rol = '".$_SESSION["sesion_id_rol"]."'
                              AND ac.id_opcion = op.id_opcion
                              AND op.id_grupo = gr.id_grupo
                              AND ac.estado <> '0'
                              AND op.estado <> '0'
                              AND gr.estado <> '0'
                              ORDER BY op.id_grupo, op.orden
                              ");
     $rs2 = $db->Execute($sql2);

     $nick = $_SESSION["sesion_usuario1"];
     $rol = $_SESSION["sesion_rol"];
     }else {
          $rs = "";
          $rs2 = "";
          $nick = "";
     }
     $sql3 = $db->Prepare("	SELECT *
     					FROM vidrieria
     					WHERE id_vidrieria = 1
     					AND estado <> '0'
     				");
     $rs3 = $db->GetAll($sql3);
     $nombre = $rs3[0]["nombre"];
     $logo_agencia = $rs3[0]["logo_agencia"];

     if ($nick != "") {
          echo "    <div class='contenedor'>
                	<h1>Menu sistema $nombre</h1>
                    <div class='normal'>
                         <table align='center' width='100%'' height='20px'' cellspacing='0'>
                           <tr>
                             <th>Usuario : $nick</th>
                             <th width='50%'></th>
                             <th>Rol : $rol</th>
                           </tr>
                         </table>
                    </div>
                    <ul id='menu'>
                        <li>
                              <style type='text/css'>
                                  .icon123 table {
                                       background-image: url('../../img/$logo_agencia');
                                       background-size: contain;
                                       background-repeat: no-repeat;
                                       background-position: center;
                                  }
                              </style>
                              <div class='icon123'>
                                   <table width=100px height=40px><tr></tr></table>
                              </div>
                        </li>";
                    $grup = "";
                    $numChill=1;
                    foreach ($rs as $r => $fila) {
                         if ($grup != $fila["grupo"]) {
                              echo "<li>";
                              echo "<a onclick = location.href=\"'\"'target='cuerpo' style='cursor:pointer;'>".$fila["grupo"]."</a>";
                              $grup = $fila["grupo"];
                              echo "<ul class='children$numChill'>";

                              foreach ($rs2 as $t => $fila2) {
                                   if ($grup == $fila2["grupo"]) {
                                        $dir_php = $_SERVER["PHP_SELF"];
                                        $dir_selfx = explode("/", $_SERVER["PHP_SELF"]);
                                        $dir_self = $dir_selfx[3];
                                        if ($dir_self != "cuerpo.php")
                                             echo "<li><a onclick='location.href=\"../".$fila2["contenido"]."\"' target='cuerpo' style='cursor:pointer;'>".$fila2["opcion"]."</a></li>";
                                        else
                                             echo "<li><a onclick='location.href=\"".$fila2["contenido"]."\"' target='cuerpo' style='cursor:pointer;'>".$fila2["opcion"]."</a></li>";
                                   }
                              }
                              echo "</ul>";
                              echo "</li>";
                              $numChill++;
                         }
                    }

                         if ($dir_self != "cuerpo.php") {

                              echo "<li>
                                        <a onclick='location.href = \"../claves/\"' target='cuerpo' style='cursor:pointer;';>Cerrar Sesion</a>
                                   </li>";
                         }else {
                              echo "<li>
                                        <a onclick='location.href = \"claves/\"' target='cuerpo' style='cursor:pointer;'>Cerrar Sesion</a>
                                   </li>";
                         }

                         echo "</ul>";
                         echo "</div>";
               }
 ?>
