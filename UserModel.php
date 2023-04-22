<?php
require_once 'Database/db.php';

class usuario extends Database
{
    public function getUser($alias_user, $password)
    {
        $sql = "SELECT * 
                FROM datos_login 
                WHERE alias= '$alias_user' AND password = '$password'
        ";

        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;

        if ($numRows == 1) {
            return true;
        }
        return false;
    }

    public function insertUser($nombre_completo, $alias_user, $password)
    {

        $sql = "INSERT INTO login() VALUES ('username', 'alias', 'contraseña')";
    }
}