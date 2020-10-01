<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT coti.fecha, coti.precio_final, emp.nombre as nombre_emp, cli.nombre as nombre_cli, cli.telefono
                              FROM cotizaciones coti
                              INNER JOIN empleados emp ON coti.id_empleado = emp.id_empleado
                              INNER JOIN clientes cli ON coti.id_cliente = cli.id_cliente
                              AND coti.estado <> '0'
                              AND emp.estado <> '0'
     ");
     $rs = $db->GetAll($sql);

     $smarty->assign("RTP_empleados_cotizaciones", $rs);
     $smarty->assign("direc_css", $direc_css);
     $smarty->display("RTP_empleados_cotizaciones1.tpl");

?>
