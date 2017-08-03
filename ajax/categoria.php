<?php
  require_once "../modelos/Categoria.php"
  $categoriaone= new Categoria();

  $idcategoria=isset($_POST["idcategoria"])? limpiarCadena($_POST["idcategoria"]):"";
 ?>
