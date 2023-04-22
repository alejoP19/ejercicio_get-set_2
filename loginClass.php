<?php


//clase
class User
{

    //Atributos
    public $primer_nombre;
    public $segundo_nombre;
    public $primer_apellido;
    public $segundo_apellido;




    public function __construct(
        $primer_nombre = "",
        $segundo_nombre = "",
        $primer_apellido = "",
        $segundo_apellido = "",

    ) {
        //constructor- Inicializdo el atributo: Primer_nombre - con el valor de: Mario
        $this->primer_nombre = $primer_nombre;
        $this->segundo_nombre = $segundo_nombre;
        $this->primer_apellido = $primer_apellido;
        $this->segundo_apellido = $segundo_apellido;
    }

    //Metodos
    public function getPrimerNombre()
    {
        //Retornando el atributo: primer_nombre
        return $this->primer_nombre;
    }
    public function setPrimerNombre($nuevo_primer_nombre)
    {
        //Asignando el valor que llega por el parámetro:
        // $nuevo_primer_nombre al atributo: primer_nombre
        $this->$nuevo_primer_nombre;
    }

    public function getSegundoNombre()
    {
        //Retornando el atributo: segundo_nombre
        return $this->segundo_nombre;
    }
    public function setSegundoNombre($nuevo_segundo_nombre)
    {
        //Asignando el valor que llega por el parámetro:
        // $nuevo_segundo_nombre al atributo: segundo_nombre
        $this->$nuevo_segundo_nombre;
    }


    public function getPrimerApellido()
    {
        //Retornando el atributo: primer_apellido
        return $this->primer_apellido;
    }

    public function setPrimerApellido($nuevo_primer_apellido)
    {
        //Asignando el valor que llega por el parámetro:
        // $nuevo_primer_apellido al atributo: primer-apellido
        $this->primer_apellido = $nuevo_primer_apellido;
    }
    public function getSegundoApellido()
    {
        //Retornando el atributo: segundo_apellido
        return $this->segundo_apellido;
    }
    public function setSegundoApellido($nuevo_segundo_apellido)
    {
        //Asignando el valor que llega por el parámetro:
        // $nuevo_segundo_apellido al atributo: segundo-apellido
        $this->$nuevo_segundo_apellido;
    }
    //metodos propios

    public function getNombreCompleto()
    {
        return $this->primer_nombre . " " . $this->segundo_nombre . " " .
            $this->primer_apellido . " " . $this->segundo_apellido;
    }
}


class LogIn
{
    public $alias;
    public $password;

    public function __construct($alias = "", $password = "")
    {
        $this->alias    = $alias;
        $this->password = $password;
    }

    public function getUser()
    {
        //Retornando el atributo: usuario
        return $this->alias;
    }
    public function setUsuer($new_alias)
    {
        //Asignando el valor que llega por el parámetro:
        // new_user_user al atributo: user
        $this->$new_alias;
    }

    public function getPassword()
    {
        //Retornando el atributo: password
        return $this->password;
    }
    public function setPassword($new_pasword)
    {
        //Asignando el valor que llega por el parámetro:
        //$new_pasword_password al atributo: password
        $this->$new_pasword;
    }

    public function getLogIn()
    {

        return $this->alias . " " . $this->password;
    }
}