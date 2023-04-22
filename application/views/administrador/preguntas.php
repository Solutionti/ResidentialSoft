<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartamentos</title>
    <?php require("components/head.php"); ?>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
</head>
<body class="fixed-sn black-skin">
    <?php require("components/navbar.php"); ?>
   <main>
   <nav class="navbar navbar-expand-md navbar-dark  mb-5">
  <a class="navbar-brand" href="#!">
    <img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" height="30" alt="MDB logo">
  </a>
  <div class="mr-auto">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb d-inline-flex pl-0 pt-0">
        <li class="breadcrumb-item"><a class="white-text" href="#!">Administración</a></li>
        <li class="breadcrumb-item active">Apartamentos</li>
      </ol>
    </nav>

  </div>
</nav>
<div class="container-fluid">
      <div class="card card-cascade wider reverse my-2 pb-2">
</div>   
<div class="container">
  <div class="row">
    <div class="col-lg-12">
    <div class="card">
      <h5 class="card-header black darken-4 white-text text-center py-4">
       <strong>Datos de la asamblea</strong>
      </h5>
        <div class="card-body px-lg-5 pt-0">
          
          <br>
          <div class="row">
            <div class="col-md-4">
              <label>Tema Asamblea</label>
              <input type="text" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Hora</label>
              <input type="time" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Fecha</label>
              <input type="date" class="form-control">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-6">
              <label>Link de la Reunion</label>
              <input type="text" class="form-control">
            </div>
            <div class="col-md-6">
              <label>Tipo de Asamblea</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <br>
          
          <button class="btn btn-rounded btn-sm btn-danger">Agregar</button>
        </div>
       </div>
    </div>



    <div class="container-fluid">
      <div class="card card-cascade wider reverse my-2 pb-2">
</div>   
<div class="container">
  <div class="row">
    <div class="col-lg-6">
    <div class="card">
      <h5 class="card-header indigo darken-4 white-text text-center py-4">
       <strong>Pregunta Unica respuesta</strong>
      </h5>
        <div class="card-body px-lg-5 pt-0">
          <br>
          <div class="form-group">
            <label for="">Pregunta</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Opcion #1</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Opcion #2</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Tiempo de la pregunta</label>
            <select name="" id="" class="form-control">
              <option value="">5 minutos </option>
              <option value="">10 Minutos </option>
              <option value="">15 Minutos </option>
              <option value="">20 Minutos </option>
              <option value="">1 Hora </option>
              <option value="">1 dia </option>
            </select>
          </div>
          <button class="btn btn-rounded btn-danger">Agregar</button>
        </div>
       </div>
    </div>
    <div class="col-lg-6">
     <div class="card">
      <h5 class="card-header red darken-4 white-text text-center py-4">
       <strong>Pregunta multiple</strong>
      </h5>
      <br>
        <div class="card-body px-lg-5 pt-0">
          <div class="form-group">
            <label for="">Pregunta</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Opcion 1</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Opcion 2</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Opcion 3</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Opcion 4</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Opcion 5</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Tiempo de la pregunta</label>
            <select name="" id="" class="form-control">
              <option value="">5 minutos </option>
              <option value="">10 Minutos </option>
              <option value="">15 Minutos </option>
              <option value="">20 Minutos </option>
              <option value="">1 Hora </option>
              <option value="">1 dia </option>
            </select>
          </div>
          <button class="btn btn-rounded btn-indigo">Agregar</button>
        </div>
       </div>
      </div>
      </div>
    </div> 
  </div>
  <div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
          <table class="table table-stripped table-hover">
              <thead class="black white-text text-uppercase">
                  <th># Codigo</th>
                  <th>Pregunta</th>
                  <th>Estado</th>
                  <th>Tiempo</th>
              </thead>
              <tbody>
                  <tr>
                    <td>1</td>
                    <td>Le gustaria ser parte de la asamblea </td>
                    <td>Activa</td>
                    <td>5 minutos</td>
                  </tr>
              </tbody>
          </table>
        </div>
    </div>
  </div>
</main>
  <br>
  <br>
  <?php require("components/footer.php"); ?>
<?php require("components/scripts.php"); ?>
<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<script>
// Material Select Initialization
$(document).ready(function() {
  $('.mdb-select').materialSelect();
  $('#dt-cell-sellection').dataTable({

select: {
  style: 'os',
  items: 'cell'
}
});

  

  $("#registroapartamento").on("click", function() {
      var url1 = "<?php echo base_url(); ?>apartamentos/registrar",
          bloque = $("#bloque").val(),
          apartament = $("#apartamento").val();

          $.ajax({
            url: url1,
            method: "POST",
            data: { bloque: bloque, apartament: apartament },
            success: function () {
                Command: toastr["success"]("El Apartamento se ha creado satisfactoriamente", "Apartamento creado con exito")
                toastr.options = {
                "closeButton": true,
                "debug": true,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "md-toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": 300,
                "hideDuration": 1000,
                "timeOut": 5000,
                "extendedTimeOut": 1000,
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
                  }
            },
            error: function (data) {
                Command: toastr["error"]("no se pudo ingresar", "no se pudo ingresar debido a un error en la red")
                toastr.options = {
                "closeButton": true,
                "debug": true,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "md-toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": 300,
                "hideDuration": 1000,
                "timeOut": 5000,
                "extendedTimeOut": 1000,
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
                  }
            }
       });
   });
});
</script>
</body>
</html>