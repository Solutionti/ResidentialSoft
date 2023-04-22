<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagos</title>
    <?php require("components/head.php"); ?>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <style>
    .shadow-textarea textarea.form-control::placeholder {
    font-weight: 300;
    }
    .shadow-textarea textarea.form-control {
    padding-left: 0.8rem;
    } 
    </style>
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
  <div class="row">
    <div class="col-lg-12">
<div class="card">
<h5 class="card-header red darken-4 white-text text-center py-4">
    <strong>Pagos</strong>
</h5>
<div class="card-body px-lg-5 pt-0">
<br>
<br>
<form action="<?php echo base_url(); ?>pagos/documento" method="POST">
<div class="row">
            <div class="col">
                <div class="md-form">
                    <select class="mdb-select md-form" id="bloque" searchable="Buscar...">
                      <option value="" disabled selected>Selecione el Bloque</option>
                      <?php foreach($bloque->result() as $bloques){ ?>
                      <option value="<?php echo $bloques->descripcion; ?>"> <?php echo $bloques->nombre; ?></option>
                      <?php } ?>
                   </select>
                </div>
            </div>
            <div class="col">
                
                    <select class="mdb-select md-form" id="apartament" searchable="Buscar...">
                      <option value="" disabled selected>Selecione Apartamento</option>
                      <?php foreach($apartament->result() as $apartaments){ ?>
                      <option value="<?php echo $apartaments->apartamento; ?>">Apto <?php echo $apartaments->apartamento; ?></option>
                      <?php } ?>
                   </select>
            </div>
    <div class="col-md-2 mt-2">
      <button class="btn btn-indigo btn-rounded btn-sm mt-4" id="btn-buscar"> <li class="fas fa-search"></li> Buscar</button>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-4">
      <label>Documento</label>
      <input type="text" id="document" class="form-control">
    </div>
    <div class="col-md-4">
      <label>Nombre</label>
      <input type="text" id="lastname" class="form-control">
    </div>
    <div class="col-md-4">
      <label>Apellido</label>
      <input type="text" id="secondname" class="form-control">
    </div>
</div>
<br>
<div class="row">
  <div class="col-md-4">
  <label >Correo</label>
  <input type="email" id="email" class="form-control">
  </div>
  <div class="col-md-4">
  <label >Tipo de usuario</label>
  <input type="text" id="tpuser" class="form-control">
  </div>
  <div class="col-md-4">
        <label>Telefono</label>
        <input type="text" id="phone" class="form-control">
    </div>
</div>
<br>
<h5>Datos de los pagos</h5>
<br>
<div class="row">
<div class="col-md-4">
  <label>Desde</label>
  <select class="browser-default custom-select" id="month">
        <option value="" selected>Selecciona el mes</option>
        <option value="2021-01-31">Enero</option>
        <option value="2021-02-28">Febrero</option>
        <option value="2021-03-30">Marzo</option>
        <option value="2021-04-31">Abril</option>
        <option value="2021-05-30">Mayo</option>
        <option value="2021-06-31">Junio</option>
        <option value="2021-07-30">Julio</option>
        <option value="2021-08-31">Agosto</option>
        <option value="2021-09-30">Septiembre</option>
        <option value="2021-10-31">Octubre</option>
        <option value="2021-11-30">Noviembre</option>
        <option value="2021-12-31">Diciembre</option>
     </select>
</div>
<div class="col-md-4">
  <label>Año</label>
  <select class="browser-default custom-select" id="year">
        <option value="" selected>Selecciona el año</option>
        <option value="2021">2021</option>
        
     </select>
</div>
<div class="col-md-4 mt-2">
  <button class="btn btn-info btn-sm btn-rounded mt-4" id="btnpagos" disabled> <li class="fas fa-file-pdf"></li> Obtener resultados</button>
</div>
</div>
<br>
<br>
<div class="row">
<div class="col-md-12">
    <table class="table  table-hover">
        <thead class="indigo text-white text-uppercase">
          <th>#</th>
          <th>Mes</th>
          <th>Año</th>
          <th>Descripciòn</th>
          <th>Valor</th>
          <th>Acciones</th>
        </thead>
        <tbody id="resultpagos">
         
        </tbody>
    </table>
</div>
</div>
<br>
<h5>Nuevo pago</h5>
<br>
<div class="row">
  <div class="col-md-4">
    <label>Mes</label>
      <select class="browser-default custom-select" id="mes">
        <option value="" selected>Selecciona el mes</option>
        <option value="Enero">Enero</option>
        <option value="Febrero">Febrero</option>
        <option value="Marzo">Marzo</option>
        <option value="Abril">Abril</option>
        <option value="Mayo">Mayo</option>
        <option value="Junio">Junio</option>
        <option value="Julio">Julio</option>
        <option value="Agosto">Agosto</option>
        <option value="Septiembre">Septiembre</option>
        <option value="Octubre">Octubre</option>
        <option value="Noviembre">Noviembre</option>
        <option value="Diciembre">Diciembre</option>
     </select>
  </div>
  <div class="col-md-4">
    <label>Año</label>
    <select class="browser-default custom-select" id="years">
     <option value="" selected>Selecciona el año</option>
     <option value="2021">2021</option>
</select>
  </div>
  <div class="col-md-4">
    <label>Valor</label>
    <input type="number" id="value" class="form-control">
  </div>
</div>
<br>
<div class="row">
    <div class="col-md-6">
     <label for="">Fecha</label>
     <input type="date" id="date" class="form-control">
    </div>
    <div class="col-md-6">
      <div class="form-group purple-border">
        <label for="exampleFormControlTextarea4">Descripción</label>
        <textarea class="form-control" id="description" rows="3"></textarea>
      </div>
    </div>
    
</div>
<button class="btn btn-outline-info btn-sm btn-rounded" id="btnsave">Guardar</button>
<button class="btn btn-outline-danger btn-sm btn-rounded" type="submit" id="documentopdf" hidden> <li class="fas fa-file-pdf"></li> Generar</button>
</div>
</form>
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
 $(document).ready(function() {
  
  $('.mdb-select').materialSelect();

    $("#btn-buscar").on("click", function(e){
      e.preventDefault();
      var url1 = "<?php echo base_url(); ?>propietarios/buscar",
          bloque = $("#bloque").val(),
          apartament = $("#apartament").val(),
          document = $("#document"),
          lastname = $("#lastname"),
          secondname = $("#secondname"),
          email = $("#email"),
          tpuser = $("#tpuser");

          $.ajax({
            url: url1,
            method: "POST",
            data: { bloque: bloque, apartament: apartament },
            success: function(data) {
              if(data === "error") {
                Command: toastr["error"]("no se encontro en la base de datos", "El propietario no se encuentra registrado")
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
                document.val(data.documento);
                lastname.val(data.nombre);
                $("#phone").val(data.celular);
                secondname.val(data.apellido);
                email.val(data.correo);
                tpuser.val(data.tp_usuario);
                $("#btnpagos").prop("disabled", false);
              }
            }
          });
    });

    $("#btnpagos").on("click", function(e) {
      e.preventDefault();
      var url2 = "<?php echo base_url(); ?>pagos/buscar",
          apartament = $("#apartament").val(),
          bloque = $("#bloque").val(),
          month = $("#month").val(),
          year = $("#year").val();

          $.ajax({
            url: url2,
            method: "POST",
            data: { apartament: apartament, bloque: bloque, month: month, year: year},
            success: function(data) {
              if(data === "error") {
                Command: toastr["error"]("No se encontro un pago vinculado a este mes", "Alerta")
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
                console.log(data);
                var pagos = data.map(function (result){
                 return '<tr><td>'+result.codigo_pago+'</td><td>'+result.mes+'</td><td>'+result.year+'</td><td>'+result.descripcion+'</td><td>$'+result.valor+'</td><td><a href="<?php echo base_url(); ?>pago/documento/'+result.codigo_pago+'"><i class="fas fa-copy mx-1 text-danger"></i></a></td></tr>';
                });
               $("#resultpagos").html(pagos);
               }
            },
            error: function () {
              Command: toastr["error"]("no se pudo obtener los datos", "no se pudo obtener resultado debido a un error en la red")
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

    $("#btnsave").on("click", function(e) {
        e.preventDefault();
        var url3 = "<?php echo base_url(); ?>pagos/guardar",
            apartament = $("#apartament").val(),
            bloque = $("#bloque").val(),
            mes = $("#mes").val(),
            date = $("#date").val(),
            years = $("#years").val(),
            value = $("#value").val(),
            description = $("#description").val();

            $.ajax({
              url: url3,
              method: "POST",
              data: { date:date, bloque:bloque, apartament:apartament, mes: mes, years:years, value:value, description:description },
              success: function () {
                Command: toastr["success"]("El pago se ha creado satisfactoriamente", "pago creado con exito");
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
                  $("#documentopdf").prop("hidden", false);
              }
        });
    });
 });
</script>


</body>
</html>