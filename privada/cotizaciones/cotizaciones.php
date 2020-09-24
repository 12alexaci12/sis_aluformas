<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../../paginacion.inc.php");

$smarty = new Smarty;

contarRegistros($db, "cotizaciones");

paginacion("cotizaciones.php?", $smarty);

$sql3 = $db->Prepare("   SELECT emp.nombre AS empleado, cli.nombre AS cliente, cot.fecha, cot.precio_final, cot.id_cotizacion
                         FROM cotizaciones AS cot, empleados AS emp, clientes AS cli
                         WHERE cot.estado <> '0'
                         AND cot.id_cotizacion >= 1
                         AND cli.id_cliente = cot.id_cliente
                         AND emp.id_empleado = cot.id_empleado
                         ORDER BY cot.fecha ASC
					LIMIT ? OFFSET ?
				  ");


/*$sql3 = $db->Prepare("SELECT *
					  FROM cotizaciones
					  WHERE estado <> '0'
					  AND id_cotizacion >= 1
					  ORDER BY id_cotizacion DESC
					  ");
$rs3 = $db->GetAll($sql3);*/
$smarty->assign("cotizaciones", $db->GetAll($sql3, array($nElem, $regIni)));
//$smarty->assign("cotizaciones", $rs3);
$smarty->assign("direc_css", $direc_css);
$smarty->display("cotizaciones.tpl");
?>
