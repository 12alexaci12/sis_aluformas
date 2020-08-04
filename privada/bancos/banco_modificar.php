<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");
     require_once("../libreria_menu.php");

     $__id_propietario = $_REQUEST["id_banco"];

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT *
                              FROM bancos
                              WHERE id_banco = ?
     ");

     $rs = $db->GetAll($sql, array($__id_propietario));
     $smarty->assign("bancos", $rs);
     $smarty->assign("direc_css", $direc_css);
     $smarty->display("banco_modificar.tpl");
?>
