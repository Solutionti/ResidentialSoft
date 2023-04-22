<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <li class="breadcrumb-item active">Inicio</li>
      </ol>
    </nav>

  </div>
</nav>
    <div class="container-fluid">
      <div class="card card-cascade wider reverse my-4 pb-5">
  <section>
    <div class="row">
      <div class="col-lg-3 col-md-12 ">
        <div class="card mt-3">
          <div class="">
            <i class="fas fa-money-bill-alt fa-lg primary-color z-depth-2 p-4 ml-3 mt-n3 rounded text-white"></i>
            <div class="float-right text-right p-3">
              <p class="text-uppercase text-muted mb-1"><small>Total PQRS</small></p>
              <h4 class="font-weight-bold mb-0">0</h4>
            </div>
          </div>
          <div class="card-body pt-0">
            <div class="progress md-progress">
              <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 ">
        <div class="card mt-3">
          <div class="">
            <i class="fas fa-chart-line fa-lg teal z-depth-2 p-4 ml-3 mt-n3 rounded text-white"></i>
            <div class="float-right text-right p-3">
              <p class="text-uppercase text-muted mb-1"><small>Respondidos</small></p>
              <h4 class="font-weight-bold mb-0">0</h4>
            </div>
          </div>
          <div class="card-body pt-0">
            <div class="progress md-progress">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 46%" aria-valuenow="46" aria-valuemin="0"
                aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 ">
        <div class="card mt-3">
          <div class="">
            <i class="fas fa-chart-line fa-lg teal z-depth-2 p-4 ml-3 mt-n3 rounded text-white"></i>
            <div class="float-right text-right p-3">
              <p class="text-uppercase text-muted mb-1"><small>Pendientes</small></p>
              <h4 class="font-weight-bold mb-0">0</h4>
            </div>
          </div>
          <div class="card-body pt-0">
            <div class="progress md-progress">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 46%" aria-valuenow="46" aria-valuemin="0"
                aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 ">
        <div class="card mt-3">
          <div class="">
            <i class="fas fa-chart-pie fa-lg purple z-depth-2 p-4 ml-3 mt-n3 rounded text-white"></i>
            <div class="float-right text-right p-3">
              <p class="text-uppercase text-muted mb-1"><small>Cerrados</small></p>
              <h4 class="font-weight-bold mb-0">0</h4>
            </div>
          </div>
          <div class="card-body pt-0">
            <div class="progress md-progress">
              <div class="progress-bar bg-success" role="progressbar" style="width: 31%" aria-valuenow="31" aria-valuemin="0"
                aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
        
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
<div class="card">
<h5 class="card-header red darken-4 white-text text-center py-4">
    <strong>Datos de los PQR's</strong>
</h5>
<div class="card-body px-lg-5 pt-0">
<br>

<div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="md-form input-group mb-3">
        <div class="input-group-prepend">
          <button 
            class="btn btn-md btn-default m-0 px-3"
            type="button"
            id="visualizar"
          >
            Visualizar
          </button>
      </div>
          <input 
            type="text"
            class="form-control"
            id="radicado"
            placeholder="Numero de Radicado"
            aria-describedby="MaterialButton-addon1"
          />
      </div>
    </div>
  </div>
</div>
<div class="container"> 
<div class="row">
    <div class="col-md-6">
    <label for="">Bloque</label>
  <input type="text" id="bloque" class="form-control">
    </div>
    <div class="col-md-6">
    <label for="">Apartamento</label>
  <input type="text" id="apartament" class="form-control">
    </div>
</div>
<br>
<div class="row">
<div class="col-md-4">
  <label for="">Fecha</label>
  <input type="text" id="date" class="form-control">
</div>
<div class="col-md-4">
  <label for="">Tipo de solicitud</label>
  <input type="text" id="tpsolicitud" class="form-control">

</div>
<div class="col-md-4">
  <label for="">Tipo de usuario</label>
  <input type="text" id="tpusuario" class="form-control">
</div>
</div>
<br>
<div class="row">
<div class="col-md-4">
  <label for="">Nombre</label>
  <input type="text" id="name1" class="form-control">
</div>
<div class="col-md-4">
  <label for="">Celular</label>
  <input type="text" id="phone" class="form-control">
</div>

<div class="col-md-4">
  <label for="">Correo</label>
  <input type="text" id="email" class="form-control">
</div>
</div>
<br>
<div class="row">
  <div class="col-md-8">
    <div class="form-group purple-border">
      <label for="exampleFormControlTextarea4">Mensaje</label>
      <textarea class="form-control" id="mensaje" rows="3"></textarea>
    </div>
  </div>
  <div class="col-md-4">
    <label for="">foto</label>
    <div class="row">
    <img src="<?php echo base_url(); ?>public/img/conjunto.jpg" width="120px;" class="img-fluid ">
    <img src="<?php echo base_url(); ?>public/img/conjunto.jpg" width="120px;" class="img-fluid ml-2">
    </div>
  </div>
</div>
<br>
<div class="row">
<div class="col-md-12">
<h5 class="cyan-text font-weight-bold">Respuesta Administrativa</h5>
<hr>
</div>
</div>
<div class="row">
<div class="col-md-6">
<label for="">Fecha</label>
<input type="text" id="resdate" class="form-control">
</div>
<div class="col-md-6">
<label for="">Estado</label>
<select name="" id="resestado" class="form-control">
  <option value="">Selecciona una opción</option>
  <option value="Aceptada">Aceptada</option>
  <option value="Rechazada">Rechazada</option>
  <option value="Abierta">Abierta</option>
</select>
</div>
</div>
<br>
<div class="row">
<div class="col-md-12">
<div class="form-group purple-border">
      <label for="exampleFormControlTextarea4">Mensaje</label>
      <textarea class="form-control" id="resmensaje" rows="3"></textarea>
</div>
<!-- <div class="md-form">
<div class="file-field">
    <a class="btn-floating purple-gradient mt-0 float-left">
      <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
      <input type="file">
    </a>
    <div class="file-path-wrapper">
      <input class="file-path validate" type="text" placeholder="Seleccione un archivo">
    </div>
  </div>
</div> -->
<button class="btn btn-danger btn-sm btn-rounded mx-left" id="btnsave">Enviar</button>
</div>
</div>
<br>
</div>
</div>
</div>

</div>

</div>
</div>   
  </main>
  <br>
  <br>
  <br>
  <?php require("components/footer.php"); ?>
<?php require("components/scripts.php"); ?>
<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function () {
  $('.mdb-select').materialSelect();
    
    $("#visualizar").on("click", function () {
        var url1 = "<?php echo base_url(); ?>pqrs/buscar",
            radicado = $("#radicado").val();
            bloque = $("#bloque"),
            apartament = $("#apartament"),
            date = $("#date"),
            tpsolicitud = $("#tpsolicitud"),
            tpusuario = $("#tpusuario"),
            name1 = $("#name1"),
            phone = $("#phone"),
            email = $("#email"),
            mensaje = $("#mensaje"),
            resdate = $("#resdate"),
            resestado = $("#resestado"),
            resmensaje = $("#resmensaje"),

            $.ajax({
              url: url1,
              method: "POST",
              data: { radicado: radicado },
              success: function (data) {
                if( data === "error") {
                    Command: toastr["error"]("no se encontro pqrs", "PQRS no se encuentra en la base de datos")
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
                else {
                  data = JSON.parse(data);
                  bloque.val(data.bloque);
                  apartament.val(data.apartamento);
                  date.val(data.fecha);
                  tpsolicitud.val(data.tp_solicitud);
                  tpusuario.val(data.tp_usuario);
                  name1.val(data.nombre);
                  phone.val(data.celular);
                  email.val(data.correo);
                  mensaje.val(data.mensaje);
                  resdate.val(data.resfecha);
                  resestado.val(data.resestado).prop("selected", true);
                  resmensaje.val(data.resmensaje);
                  if(data.resestado === "Aceptada") {
                    $("#btnsave").prop("disabled", true);
                  }
                  else if (data.resestado === "Rechazada") {
                    $("#btnsave").prop("disabled", true);
                  }
                  else {
                  $("#btnsave").prop("disabled", false);
                  }
                  bloque.prop("disabled", true);
                  apartament.prop("disabled", true);
                  date.prop("disabled", true);
                  tpsolicitud.prop("disabled", true);
                  tpusuario.prop("disabled", true);
                  name1.prop("disabled", true);
                  phone.prop("disabled", true);
                  email.prop("disabled", true);
                  mensaje.prop("disabled", true);
                }
              }
            });
        });

        // $("#btnsave").on("click", function () {
        //       var url2 = "<?php echo base_url(); ?>pqrs/guardar",
        //           radicado = $("#radicado").val()
        //           resdate = $("#resdate").val(),
        //           resestado = $("#resestado").val(),
        //           resmensaje = $("#resmensaje").val(),
        //           email = $("#email").val();

        //           $.ajax({
        //             url: url2,
        //             method: "POST",
        //             data: { radicado:radicado, resdate: resdate, resestado:resestado, resmensaje:resmensaje, email:email }
        //             success: function() {
                      
        //             }
        //           });
                 
        // });
   });
</script>
</body>
</html>