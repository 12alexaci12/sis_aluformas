<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");
     require_once("../libreria_menu.php");

     $__id_cliente = $_REQUEST["id_cliente"];
     $__id_banco = $_REQUEST["id_banco"];

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT *
                              FROM b_clientes
                              WHERE id_cliente = ?
     ");
     $rs = $db->GetAll($sql, array($__id_cliente));

     $sql1 = $db->Prepare("	SELECT *
     					FROM bancos
     					WHERE id_banco = ?
     					 ");
     $rs1 = $db->GetAll($sql1, array($__id_banco));

     $sql2 = $db->Prepare("	SELECT *
     					FROM bancos
     					WHERE id_banco <> ?
     					 ");
     $rs2 = $db->GetAll($sql2, array($__id_banco));

     $smarty->assign("clientes", $rs);
     $smarty->assign("banco", $rs1);
     $smarty->assign("bancos", $rs2);
     $smarty->assign("direc_css", $direc_css);
     $smarty->display("cliente_modificar.tpl");
?>
