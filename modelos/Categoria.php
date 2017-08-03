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
      return ejecutarConsulta($sql);
    }
    // Implementamos un metodo para editar registros
    public function editar($idcategoria,$nombre,$descripcion)
    {
      $sql="UPDATE  categoria SET nombre='$nombre', descripcion='$descripcion'
       WHERE idcategoria='$idcategoria'";
       return ejecutarConsulta($sql);
    }
    //implmentamos metodos para desactivar categorias
    public function desactivar($idcategoria)
    {
      $sql= "UPDATE categoria SET condicion='0' WHERE idcategoria='$idcategoria'";
      return ejecutarConsulta($sql);
    }
    // metodo activa categoria
    public function activar($idcategoria)
    {
      $sql= "UPDATE categoria SET condicion='1' WHERE idcategoria='$idcategoria'";
      return ejecutarConsulta($sql);
    }
    // Implementar un mètodo para mostrar los datos de un registro a modificar
    public function mostrar($idcategoria)
    {
      $sql="SELECT * FROM categoria WHERE idcategoria='$idcategoria'"
      return ejecutaConsultaSimpleFila($sql);
    }
    public function listar()
    {
      $sql= ""SELECT * FROM categoria;
      return ejecutarConsulta($sql);
    }
  }

 ?>
