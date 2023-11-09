<?php
    class mantenimientoModel{
        private $PDO;
        public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($idc,$ide,$idp,$np,$hr,$costo,$iva){
            $stament = $this->PDO->prepare("INSERT INTO mantenimiento VALUES(null,:idc,:ide,:idp,:np,:hr,:costo,:iva)");
            $stament->bindParam(":idc",$idc);
            $stament->bindParam(":ide",$ide);
            $stament->bindParam(":idp",$idp);
            $stament->bindParam(":np",$np);
            $stament->bindParam(":hr",$hr);
            $stament->bindParam(":costo",$costo);
            $stament->bindParam(":iva",$iva);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }
        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM mantenimiento where id = :id limit 1");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM mantenimiento");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function update($id,$id_cliente,$ide,$idp,$np,$hr,$costo,$iva){
            $stament = $this->PDO->prepare("UPDATE mantenimiento SET id_cliente = :id_cliente, id_empleado = :ide, id_producto = :idp, nom_producto = :np, hora = :hr, costo = :costo, iva = :iva  WHERE id = :id");
            $stament->bindParam(":id_cliente",$id_cliente);
            $stament->bindParam(":ide",$ide);
            $stament->bindParam(":idp",$idp);
            $stament->bindParam(":np",$np);
            $stament->bindParam(":hr",$hr);
            $stament->bindParam(":costo",$costo);
            $stament->bindParam(":iva",$iva);
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $id : false;
        }
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM mantenimiento WHERE id = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }
    }

?>