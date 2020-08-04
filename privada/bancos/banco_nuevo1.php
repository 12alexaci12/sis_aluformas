<?php
session_start();

require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");

$__direccion = $_POST["direccion"];
$__nombre = $_POST["nombre"];
$__telefono = $_POST["telefono"];
$__url = $_POST["url"];

$smarty = new Smarty;

	$reg = array();
	$reg["direccion"] = $__direccion;
	$reg["nombre"] = $__nombre;
	$reg["telefono"] = $__telefono;
	$reg["url"] = $__url;
	$reg["_fec_inser"] = date("Y-m-d H:i:s");
	$reg["_estado"] = '1';
	$reg["_usuario"] = $_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("bancos",$reg, "INSERT");

if ($rs1){
	header("Location: bancos.php");
	exit();
} else{
	$smarty->assign("mensaje","ERROR: Los datos no se insertaron !!!!!!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->display("banco_nuevo1.tpl");
}
?>
