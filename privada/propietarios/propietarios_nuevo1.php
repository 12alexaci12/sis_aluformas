<?php
session_start();

require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");

$__ci = $_POST["ci"];
$__nombre = $_POST["nombre"];
$__telefono = $_POST["telefono"];

$smarty = new Smarty;

	$reg = array();
	$reg["id_vidrieria"] = 1;
	$reg["ci"] = $__ci;
	$reg["nombre"] = $__nombre;
	$reg["telefono"] = $__telefono;
	$reg["fec_insercion"] = date("Y-m-d H:i:s");
	$reg["estado"] = '1';
	$reg["usuario"] = $_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("propietarios",$reg, "INSERT");

if ($rs1){
	header("Location: propietarios.php");
	exit();
} else{
	$smarty->assign("mensaje","ERROR: Los datos no se insertaron !!!!!!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->display("propietarios_nuevo1.tpl");
}
?>
