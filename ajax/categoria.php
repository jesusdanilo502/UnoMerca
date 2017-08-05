<?php
  require_once "../modelos/Categoria.php";
  $categoriaone= new Categoria();

  $idcategoria=isset($_POST["idcategoria"])? limpiarCadena($_POST["idcategoria"]):"";
  $nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
  $descripcion=isset($_POST["descripcion"])? limpiarCadena($_POST["descripcion"]):"";

   switch ($_GET["OP"]) {
     case 'guardaryeditar':
       if (empty($idcategoria)){
         $rspta=$categoriaone->insertar($nombre,$descripcion);
         echo $rspta ? "Categoria Registrada" : "Categoria no se pudo Registrar";
       }
       else {
         if (empty($idcategoria)){
           $rspta=$categoriaone->editar($idcategoria,$nombre,$descripcion);
           echo $rspta ? "Categoria Actualizada" : "Categoria No se Pudo actualizar";
         }
       }
       break;

       case 'descativar':
       if (empty($idcategoria)){
         $rspta=$categoriaone->editar($idcategoria);
         echo $rspta ? "Categoria Desactivada" : "Categoria No se Pudo activar";
       }
       break;

       case 'activar':
       if (empty($idcategoria)){
         $rspta=$categoriaone->editar($idcategoria);
         echo $rspta ? "Categoria Activada" : "Categoria No se Pudo activar";
       }
       break;

       case 'mostrar':
         $rspta=$categoriaone->mostrar($idcategoria);
          // Codificar el resultado utilizando json, llamo la cadena de mi select guardado en el metodo de la
          //clase categoria.
         echo json_encode ($rspta);
       break;

       case 'listar':
       $rspta=$categoriaone->listar();
       //vamos a declarar un array
       $data= array();

       // recorro mi array para almacenar en los indices cada uno de los campos de la db
       while ($reg=$rspta->fetch_object()){
         $data[]=array(
           "0"=>$reg->idcategoria,
           "1"=>$reg->nombre,
           "2"=>$reg->descripcion,
           "3"=>$reg->condicion
         );
       }
       $result = array(
         "sECHO"=>1,//INFORMACION PARA EL DATATABLES
         "iTotalRecords"=>count($data),//enviamos el total de registros en la tabla;
         "iTotalDisplayRecords"=>count($data),// enviamos el total de registro a visualizar
         "aaData"=>$data);
         echo json_encode($result);
      break;
   }
 ?>
