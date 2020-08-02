<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");

$__id_vidrieria = $_REQUEST["id_vidrieria"];
$__direccion = $_POST["direccion"];
$__nombre = $_POST["nombre"];
$__telefono = $_POST["telefono"];
//$db->debug-true;
$smarty = new Smarty;

$reg = array();
$reg["direccion"] = $__direccion;
$reg["nombre"] = $__nombre;
$reg["telefono"] = $__telefono;
$reg["_usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("vidrieria", $reg, "UPDATE", "id_vidrieria='".$__id_vidrieria."'");

if($rs1) {
      header("Location: vidrieria.php");
      exit();
}else {
     $smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!!");
     $smarty->assign("direc_css", $direc_css);
     $smarty->assign("id_vidrieria", $__id_vidrieria);
     $smarty->display("vidrieria_modificar1.tpl");
}
