<?php
require "../config/conexion.php";

class Articulo
{
    //Implementamos nuestro constructor
    public function __construct()
    {

    }

    //Implementamos un método para insertar registros
    public function insertar($idcategoria,$codigo,$nombre,$stock,$descripcion,$imagen)
    {
        $sql="INSERT INTO articulo (idcategoria,codigo,nombre,stock,descripcion,imagen)
		VALUES ('$idcategoria','$codigo','$nombre','$stock','$descripcion','$imagen','1')";
        return ejecutarConsulta($sql);
    }

    //Implementamos un método para editar registros
    public function editar($idarticulo,$idcategoria,$codigo,$nombre,$stock,$descripcion,$imagen)
    {
        $sql="UPDATE articulo SET idcategoria='$idcategoria',codigo='$codigo',nombre='$nombre',stock='$stock',descripcion='$descripcion',imagen='$imagen' WHERE idarticulo='$idarticulo'";
        return ejecutarConsulta($sql);
    }

    //Implementamos un método para desactivar registros
    public function desactivar($idarticulo)
    {
        $sql="UPDATE categoria SET condicion='0' WHERE idarticulo='$idarticulo'";
        return ejecutarConsulta($sql);
    }

    //Implementamos un método para activar registro
    public function activar($idarticulo)
    {
        $sql="UPDATE articulo SET condicion='1' WHERE idarticulo='$idarticulo'";
        return ejecutarConsulta($sql);
    }

    //Implementar un método para mostrar los datos de un registro a modificar
    public function mostrar($idarticulo)
    {
        $sql="SELECT * FROM articulo WHERE idarticulo='$idarticulo'";
        return ejecutarConsultaSimpleFila($sql);
    }

    //Implementar un método para listar los registros
    public function listar()
    {
        $sql="SELECT a.idarticulo,a.idcategoria,c.nombre as categoria,
          a.codigo,a.nombre,a.stock,a.descripcion,a.imagen,a.condicion
          FROM articulo as a inner join categoria as c on a.idcategoria=c.idcategoria";
        return ejecutarConsulta($sql);
    }
    //Implementar un método para listar los registros y mostrar en el select
    public function select()
    {
        $sql="SELECT * FROM categoria where condicion=1";
        return ejecutarConsulta($sql);
    }
}

