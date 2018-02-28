  var tabla;
  // funciòn que se ejecuta al inicio

  function init(){
    mostrarform(false);
    listar();

    //ejecuto boton guardar para cuando de click me llame la función guardaryditar del formulario
      //y se ejecute el proceso
      $("#formulario").on("submit",function (e)
      {
          guardaryeditar(e);
      })
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
    // con este if evaluao y muestro o oculto el fomulario de categorias
      //si voy a crear una nueva categoria oculto el listdo sino muestro el listado.
      if (flag) {
          $("#listadoregistros").hide();
          $("#formularioregistros").show();
          $("#btnguardar").prop("disabled", false);
      }
      else {
          $("#listadoregistros").show();
          $("#formularioregistros").hide();

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
    tabla=$('#tblistado').dataTable(
        {
      "aProcessing": true, // Activamos el procesamiento de DATATABLES"
      "aServerSide": true,//Paginación y filtrado realizado por el servidor,
      dom:'Bfrtip', // Definimos los elementos del control tabla
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
    "bDestroy": true,
    "iDisplayLength": 5, // paginación
    "order":[[0, "desc"]] // Ordenar (Columna,orden)
  }).DataTable();
  }
  // Función para guardar y editar
  function guardaryeditar(e)
  {
   e.preventDefault(); // No se activara la acción predeterminada del evento segun la librearia ajax
      $("#btnGuardar").prop("disabled",true);
      var formData= new FormData($("#formulario")[0]);

      $.ajax({
          url: "../ajax/categoria.php?op=guardaryeditar",
          type: "POST",
          data: formData,
          contentType: false,
          processData: False,

          success: function (datos)
          {
           alert(datos);
           mostrarform(false);
           tabla.ajax.reload();
          }
      });
      limpiar();
  }
  init();
