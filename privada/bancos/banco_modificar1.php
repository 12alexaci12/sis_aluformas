<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");

$__id_banco = $_REQUEST["id_banco"];
$__direccion = $_POST["direccion"];
$__nombre = $_POST["nombre"];
$__telefono = $_POST["telefono"];
$__url = $_POST["url"];
//$db->debug-true;
$smarty = new Smarty;

$reg = array();
$reg["ci"] = $__ci;
$reg["nombre"] = $__nombre;
$reg["telefono"] = $__telefono;
$reg["url"] = $__url;
$reg["_usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("bancos", $reg, "UPDATE", "id_banco='".$__id_banco."'");

if($rs1) {
      header("Location: bancos.php");
      exit();
}else {
     $smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!!");
     $smarty->assign("direc_css", $direc_css);
     $smarty->assign("id_banco", $__id_banco);
     $smarty->display("banco_modificar1.tpl");
}
