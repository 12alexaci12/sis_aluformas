<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

$sql3 = $db->Prepare("SELECT *
					  FROM personas
					  WHERE estado <> '0'
					  AND id_persona >= 1
					  ORDER BY id_persona DESC 
					  ");
$rs3 = $db->GetAll($sql3);

$smarty->assign("personas", $rs3);
$smarty->assign("direc_css", $direc_css);
$smarty->display("personas.tpl");                                                                                       

?>