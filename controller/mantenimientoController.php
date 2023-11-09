<?php
    class mantenimientoController{
        private $model;
        public function __construct()
        {
            require_once("C:/xampp/htdocs/proyecto/model/mantenimientoModel.php");
            $this->model = new mantenimientoModel();
        }
        public function guardar($idc,$ide,$idp,$np,$hr,$costo,$iva){
            $id = $this->model->insertar($idc,$ide,$idp,$np,$hr,$costo,$iva);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }
        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
        public function update($id, $id_cliente, $ide, $idp, $np, $hr, $costo, $iva){
            return ($this->model->update($id,$id_cliente, $ide, $idp, $np, $hr, $costo, $iva) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
        }
        public function delete($id){
            return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id) ;
        }
    }

?>