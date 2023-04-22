<?php

if (isset($_POST['submit'])) {
  $user_alias = $_POST['alias'];
  $user_password = $_POST['password'];

  if (empty($user_alias) || empty($user_password)) {

    echo '<div class=alert alert-danger">Alias o Contraseña vacio </div>';
  } else {

    $user = new usuario;

    if ($user->getUser($user_alias, $user_password)) {

      session_start();
      $_SESSION['usuario'] = $user_alias;
      header('location:welcome.php');

    } else {
      echo '<div class="alert alert-danger">
      Usuario no existe, si desea crear un nuevo usuario <a href="formCrearUsuario.php">haga clic</a>
      </div>';
    }
  }
}