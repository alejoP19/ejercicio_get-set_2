<?php
require_once("index.php");



//Instanciando la clase o el obeto
$user = new Usuario("Mario", "Alejandro", "Echeverry", "Echeverry");
$user_nombre_completo = $user->getNombreCompleto();
// echo "Hola, mi nombre es: " .$user_nombre_completo . " " . "Bienvenidos"; 
// echo "<hr>";
$user_dos = new Usuario("Olver", "Aurelio", "Martinez", "Estirado");
$user_dos_nombre_completo =  $user->getNombreCompleto();
// echo "Hola, mi nombre es: " .$user_dos_nombre_completo . " " . "¡A estirar amiguitos!"; 
$user_tres = new Usuario("Kevin", "Mohamed", "Iran", "Turco");
$user_tres_nombre_completo =  $user->getNombreCompleto();





?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Usuarios</title>
</head>

<body>


    <table class="table table-striped table-columns table-bordered border-success">
        <thead>
            <tr class="table-secondary">
                <th scope="col">#</th>
                <th scope="col">Primer Nombre</th>
                <th scope="col">Segundo Nombre</th>
                <th scope="col">Primer Apellido</th>
                <th scope="col">Segundo Apellido</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-dark">
                <th scope="row">1</th>
                <td> <?php echo $user->getPrimerNombre() ?></td>
                <td><?php echo $user->getSegundoNombre() ?></td>
                <td><?php echo $user->getPrimerApellido() ?></td>
                <td><?php echo $user->getSegundoApellido() ?></td>
            </tr>
            <tr class="table-secondary">
                <th scope="row">2</th>
                <td> <?php echo $user_dos->getPrimerNombre() ?></td>
                <td><?php echo $user_dos->getSegundoNombre() ?></td>
                <td><?php echo $user_dos->getPrimerApellido() ?></td>
                <td><?php echo $user_dos->getSegundoApellido() ?></td>
            </tr>
            <tr class="table-dark">
                <th scope="row">3</th>
                <td> <?php echo $user_tres->getPrimerNombre() ?></td>
                <td><?php echo $user_tres->getSegundoNombre() ?></td>
                <td><?php echo $user_tres->getPrimerApellido() ?></td>
                <td><?php echo $user_tres->getSegundoApellido() ?></td>
            </tr>
        </tbody>
    </table>
    <br> <br>





    <!-- <div class="container">
    <div class="row mt-3 justity-content-md-center">
        <div class="col-md-6">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="username">Nombre Completo</label>
                    <input class form="form-control" name=username placeholder="Nombre Completo"
                        value="mario alejandro echeverry" type="text">
                </div>
                <div class="form-group">
                    <label for="alias">Alias</label>
                    <input class form="form-control" name=alias placeholder="Alias" value="joseCanseco23@" type="text">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input class form="form-control" name=password placeholder="Contraseña" value="Usu33@1234"
                        type="password">
                </div>
                <button type="submit" name=submit  class="btn btn-sm btn-block btn-primary">Iniciar Sesión</button>
            </form>

        </div>
    </div>
</div> -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

</body>

</html>