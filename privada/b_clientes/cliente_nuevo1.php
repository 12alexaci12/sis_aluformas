<?php
session_start();

require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
$__id_banco = $_POST["id_banco"];
$__nombre = $_POST["nombre"];
$__ci = $_POST["ci"];
$__ap = $_POST["ap"];
$__am = $_POST["am"];
$__direccion = $_POST["direccion"];
$__telefono = $_POST["telefono"];

$smarty = new Smarty;

	$reg = array();
	$reg["id_banco"] = $__id_banco;
	$reg["nombre"] = $__nombre;
	$reg["ci"] = $__ci;
	$reg["ap"] = $__ap;
	$reg["am"] = $__am;
	$reg["direccion"] = $__direccion;
	$reg["telefono"] = $__telefono;
	$reg["_fec_inser"] = date("Y-m-d H:i:s");
	$reg["_estado"] = '1';
	$reg["_usuario"] = $_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("b_clientes",$reg, "INSERT");

if ($rs1){
	header("Location: clientes.php");
	exit();
} else{
	$smarty->assign("mensaje","ERROR: Los datos no se insertaron !!!!!!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->display("cliente_nuevo1.tpl");
}
?>
