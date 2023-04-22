<?php

include 'partials/header.php';
require_once 'Database/Db.php';
require_once 'UserModel.php';
require_once 'UserController.php';
require_once 'loginClass.php';

// $user = new User("Mario", "Alejandro", "Echeverry", "Quiceno");
// $user_nombre_completo = $user->getNombreCompleto();

// $user_alias = new LogIn("joseCanseco22@", "1256");
// $alias = $user_alias->getUser();
// $password = $user_alias->getPassword();

?>
<div class="container">
    <div class="row mt-3 justity-content-md-center">
        <div class="col-md-6">
            <form action="" method="POST" class="my-3">
                <div class="form-group my-2">
                    <input class="form-control" name="alias" placeholder="Alias" type="text">
                </div>
                <div class="form-group my-2">
                    <input class="form-control" name="password" placeholder="Contraseña" id="password" type="password">
                </div>
                <div class="form-group my-2">
                    <button type="submit" name="submit" class="btn btn-sm btn-block btn-primary">Iniciar Sesión</button>
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