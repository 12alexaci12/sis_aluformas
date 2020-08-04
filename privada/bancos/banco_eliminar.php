<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");

     $__id_banco = $_REQUEST["id_banco"];

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT *
                              FROM bancos
                              WHERE id_banco = {$__id_banco}
                              AND estado <> '0'
     ");
     $rs = $db->GetAll($sql, array($__id_banco));

     if(!$rs){
          $reg = array();
          $reg["_estado"] = '0';
          $reg["_id_usuario"] = $_SESSION["sesion_id_usuario"];
          $rs1 = $db->AutoExecute("bancos", $reg, "UPDATE", "id_banco='".$__id_banco."'");
          header("Location:bancos.php");
          exit();
     } else {
          $smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!");
          $smarty->assign("direc_css", $direc_css);
          $smarty->display("banco_eliminar.tpl");
     }
 ?>
