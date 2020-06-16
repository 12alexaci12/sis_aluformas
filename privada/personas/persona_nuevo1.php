<?php
session_start();

require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");

$__ci = $_POST["ci"];
$__nombre = $_POST["nombre"];
$__ap = $_POST["ap"];
$__am = $_POST["am"];
$__telefono = $_POST["telefono"];
$__direccion = $_POST["direccion"];

$__genero = $_POST["genero"];

$smarty = new Smarty;

	$reg = array();
	$reg["id_vidrieria"] = 1;
	$reg["ci"] = $__ci;
	$reg["nombre"] = $__nombre;
	$reg["ap"] = $__ap;
	$reg["am"] = $__am;
	$reg["telefono"] = $__telefono;
	$reg["direccion"] = $__direccion;
	$reg["genero"] = $__genero;
	$reg["fec_insercion"] = date("Y-m-d H:i:s");
	$reg["estado"] = '1';
	$reg["usuario"] = $_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("personas",$reg, "INSERT");

if ($rs1){
	header("Location: personas.php");
	exit();
} else{
	$smarty->assign("mensaje","ERROR: Los datos no se insertaron !!!!!!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->display("persona_nuevo1.tpl");
}
?>
