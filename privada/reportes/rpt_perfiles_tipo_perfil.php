<?php
     session_start();
     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");
     require_once("../libreria_menu.php");

     $sql = $db->Prepare("    SELECT *
                              FROM tipo_perfil tp
                              WHERE tp.estado <> '0'
                         ");
     $rs = $db->GetAll($sql);

     $smarty = new Smarty;

     $smarty->assign("tipo_perfil", $rs);
     $smarty->assign("direcc_css", $direc_css);
     $smarty->display("rpt_perfiles_tipo_perfil.tpl");
 ?>
