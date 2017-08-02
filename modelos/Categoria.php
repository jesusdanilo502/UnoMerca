<?php
  require "../config/conexion.php";

  class Categoria{

    //implementamos nuestro constructor

    public function __construct()
    {

    }
    // implementamos metodos para inserar registros

    public function insertar($nombre,$descripcion)
    {
      $sql= "INSERT INTO Categoria(nombre,descripcion,condicion)";
      VALUES ('$nombre','$descripcion','1');
      return ejecutarconsulta($sql);
    }
  }

 ?>
