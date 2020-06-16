<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");

if((isset($_POST["accion"])) and ($_POST["accion"]=="Ingresar")){
	$nick = $_POST["nick"];
	$password = $_POST["password"];
	$sql = $db->Prepare("SELECT u.*, ur.id_rol, r.rol
						FROM usuarios u, usuarios_roles ur, roles r
						WHERE u.usuario1 = ?
						AND u.clave = ?
						AND u.id_usuario = ur.id_usuario
						AND ur.id_rol = r.id_rol
						AND u.estado <> '0'
						AND ur.estado <> '0'
						AND r.estado <> '0'
						");
	$rs = $db->GetAll($sql, array($nick, $password));

	if($rs){
		foreach ($rs as $k => $linea) {
				$_SESSION["sesion_id_usuario"] = $linea["id_usuario"];
				$_SESSION["sesion_usuario1"] = $linea["usuario1"];
				$_SESSION["sesion_id_rol"] = $linea["id_rol"];
				$_SESSION["sesion_rol"] = $linea["rol"];
				$_SESSION["sesion_id_usuario"];
		}
		$mensage = "DATOS CORRECTOS";
		$mensage1 = "BIENVENIDO AL SISTEMA........!!!!";
	}else{
		$mensage = "DATOS INCORRECTOS";
		$mensage1 = "POR FAVOR INTENTE NUEVAMENTE";
	}
} else{
	$mensage = "CERRANDO LA SESION !!!!!!!!";
	$mensage1 = "SE ESTA SALIENDO DEL SISTEMA ........";
	session_unset($_SESSION["sesion_id_usuario"]);
	session_destroy();
}
$smarty = new smarty;

$smarty->assign("mensage",$mensage);
$smarty->assign("mensage1",$mensage1);
$smarty->display("index.tpl");

?>
