<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$idCotizaion = $_GET['id_cotizacion'];

$smarty = new Smarty;

$sql5 = $db->Prepare("   SELECT pro.nombre, det.alto, det.ancho, pro.precio_m2, round((det.alto * det.ancho * pro.precio_m2/10000)) AS precio
                         FROM productos AS pro, detalle_cotizaciones AS det, cotizaciones AS cot
                         WHERE det.estado <> 0
                         AND det.id_cotizacion = {$idCotizaion}
                         AND det.id_cotizacion = cot.id_cotizacion
                         AND pro.id_producto = det.id_producto
				  ");
$rs5 = $db->GetAll($sql5);

$smarty->assign("detalles", $rs5);
$smarty->assign("direc_css", $direc_css);
$smarty->display("detalles.tpl");
?>
