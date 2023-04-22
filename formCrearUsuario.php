<?php

require_once 'Database/Db.php';
require_once 'UserModel.php';
require_once 'UserController.php';
require_once 'loginClass.php';

include 'partials/header.php';
?>
<div class="container">
    <div class="row mt-3 justity-content-md-center">
        <div class="col-md-6">
            <form action="crearUsuario.php" method="POST" class="my-3">
                <div class="form-group my-2">
                    <input class="form-control" name="nombre_completo" placeholder="Nombre Completo" type="text">
                </div>
                <div class="form-group my-2">
                    <input class="form-control" name="alias" placeholder="Alias" type="text">
                </div>
                <div class="form-group my-2">
                    <input class="form-control" name="password" placeholder="Contraseña" id="password" type="password">
                </div>
                <div class="form-group my-2">
                    <button type="submit" name="submit" class="btn btn-sm btn-block btn-primary">Crear Usuario</button>
                </div>
            </form>

        </div>
    </div>
</div>
<?php
    include 'partials/footer.php'
?>

<?php
// session_start();
// if ($_SESSION['usuario']) {
//     header('Location: welcome.php');
// }

// include 'Database/db.php';
// include 'UserModel.php';
// include 'UserController.php 
//
?>