<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

$sql7 = $db->Prepare("   SELECT *
                         FROM bancos
                         WHERE _estado <> '0'
                         AND id_banco >= 1
				  ");
$rs7 = $db->GetAll($sql7);

$smarty->assign("bancos", $rs7);
$smarty->assign("direc_css", $direc_css);
$smarty->display("bancos.tpl");
?>
