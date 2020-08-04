<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$sql = $db->Prepare("	SELECT *
					FROM bancos
					WHERE _estado <> '0'
					ORDER BY id_banco DESC
					 ");
$rs = $db->GetAll($sql);

$smarty = new Smarty;
$smarty->assign("direc_css", $direc_css);
$smarty->assign("bancos", $rs);
$smarty->display("cliente_nuevo.tpl");
?>
