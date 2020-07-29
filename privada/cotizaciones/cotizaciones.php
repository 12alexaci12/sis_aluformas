<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

$sql4 = $db->Prepare("   SELECT emp.nombre AS empleado, cli.nombre AS cliente, cot.fecha, cot.precio_final, cot.id_cotizacion
                         FROM cotizaciones AS cot, empleados AS emp, clientes AS cli
                         WHERE cot.estado <> '0'
                         AND cot.id_cotizacion >= 1
                         AND cli.id_cliente = cot.id_cliente
                         AND emp.id_empleado = cot.id_empleado
                         ORDER BY cot.fecha ASC
				  ");
$rs4 = $db->GetAll($sql4);

$smarty->assign("cotizaciones", $rs4);
$smarty->assign("direc_css", $direc_css);
$smarty->display("cotizaciones.tpl");
?>
