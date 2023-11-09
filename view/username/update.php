<?php
    require_once("c://xampp/htdocs/proyecto/controller/mantenimientoController.php");
    $obj = new mantenimientoController();
    $obj->update($_POST['id'],$_POST['idc'],$_POST['ide'],$_POST['idp'],$_POST['np'],$_POST['hr'],$_POST['costo'],$_POST['iva']);
?>