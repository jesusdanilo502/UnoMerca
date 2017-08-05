  var tabla;
  // funciòn que se ejecuta al inicio

  function init(){
    mostrarform(false);
    listar();
  }

  // funciòn limpiar
   function limpiar()
   {
   $("#idcategoria").val("");
   $("#nombre").val("");
   $("#descripcion").val("");
   }
  // Función mostrar formulario

  function mostrarform(flag)
  {
    limpiar();
    if (flag)
    {
      $("#listadoregistros").hide();
      $("#listadoregistros").show();
      $("#btnguardar").prop("disable",false);
    }
    else {
      $("#listadoregistros").show();
      $("#listadoregistros").hide();
    }
  }
  // Función cancelar formulario
  function cancelarform()
  {
    limpiar();
    mostrarform(false);
  }
  //FUnción listar
  function listar()
  {
    tabla=$('tblistado').dataTable(
      "aProcessing": true, // Activamos el procesamiento de DATATABLES"
      "aServerSide": true,//Paginación y filtrado realizado por el servidor,
      dom .'Bfrtip', // Definimos los elementos del control tabla
      buttons: [
                 'copyHtml5',
                 'excelHtml5',
                 'csvHtml5',
                 'pdf'
              ],
    "ajax":
    {
       url: '../ajax/categoria.php?op=listar',
       type: "get",
       dataType: "json",
       error: function(e){
         console.log(e.responseText);
       }
    },
    "bDestroy": true;
    "iDisplayLength": 5, // paginación
    "order":[[0, "desc"]] // Ordenar (Columna,orden)
  }).DataTable();
  }
  init();
