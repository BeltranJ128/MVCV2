<?php
    require_once("C:/xampp/htdocs/proyecto/view/head/head.php");
    require_once("C:/xampp/htdocs/proyecto/controller/mantenimientoController.php");
    $obj = new mantenimientoController();
    $user = $obj->show($_GET['id']);
?>
  <form action="update.php" method="post" autocomplete="off">
    <h2>Modificando Registro</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
        <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user[0]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Id Cliente</label>
        <div class="col-sm-10">
            <input type="text" name="idc" class="form-control" id="inputPassword" value="<?= $user[1]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Id Empleado</label>
        <div class="col-sm-10">
            <input type="text" name="ide" class="form-control" id="inputPassword" value="<?= $user[2]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Id Producto</label>
        <div class="col-sm-10">
            <input type="text" name="idp" class="form-control" id="inputPassword" value="<?= $user[3]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nombre Producto</label>
        <div class="col-sm-10">
            <input type="text" name="np" class="form-control" id="inputPassword" value="<?= $user[4]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Hora</label>
        <div class="col-sm-10">
            <input type="text" name="hr" class="form-control" id="inputPassword" value="<?= $user[5]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Costo</label>
        <div class="col-sm-10">
            <input type="text" name="costo" class="form-control" id="inputPassword" value="<?= $user[6]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Iva</label>
        <div class="col-sm-10">
            <input type="text" name="iva" class="form-control" id="inputPassword" value="<?= $user[7]?>">
        </div>
    </div>
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar</a>
    </div>
  </form>
<?php
    require_once("C:/xampp/htdocs/proyecto/view/head/footer.php");
?>