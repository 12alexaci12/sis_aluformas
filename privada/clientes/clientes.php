<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

$sql6 = $db->Prepare("   SELECT *
                         FROM clientes
                         WHERE estado <> '0'
                         AND id_cliente >= 1
				  ");
$rs6 = $db->GetAll($sql6);

$smarty->assign("clientes", $rs6);
$smarty->assign("direc_css", $direc_css);
$smarty->display("clientes.tpl");
?>
