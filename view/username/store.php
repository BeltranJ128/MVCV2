<?php
    require_once("C:/xampp/htdocs/proyecto/controller/mantenimientoController.php");
    $obj = new mantenimientoController();
    $obj->guardar($_POST['idc'],$_POST['ide'],$_POST['idp'],$_POST['np'],$_POST['hr'],$_POST['costo'],$_POST['iva']);
?>