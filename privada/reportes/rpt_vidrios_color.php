<?php
     session_start();
     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");
     require_once("../libreria_menu.php");

     $sql = $db->Prepare("    SELECT *
                              FROM color co
                              WHERE co.estado <> '0'
                         ");
     $rs = $db->GetAll($sql);

     $smarty = new Smarty;

     $smarty->assign("colores", $rs);
     $smarty->assign("direcc_css", $direc_css);
     $smarty->display("rpt_vidrios_color.tpl");
 ?>
