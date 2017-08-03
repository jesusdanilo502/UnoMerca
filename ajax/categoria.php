<?php
  require_once "../modelos/Categoria.php"
  $categoriaone= new Categoria();

  $idcategoria=isset($_POST["idcategoria"])? limpiarCadena($_POST["idcategoria"]):"";
  $nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
  $descripcion=isset($_POST["descripcion"])? limpiarCadena($_POST["descripcion"]):"";
 ?>
