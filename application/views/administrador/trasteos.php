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
    
        
<div class="container">
  <div class="row">
    <div class="col-lg-12">
<div class="card">
<h5 class="card-header red darken-4 white-text text-center py-4">
    <strong>Trasteos</strong>
</h5>
<div class="card-body px-lg-5 pt-0">
<br>
<div class="container"> 
<div class="row">
    <div class="col-md-6">
    <select class="mdb-select md-form" id="bloque" searchable="Buscar...">
       <option value="" disabled selected>Selecione el Bloque</option>
       <?php foreach($bloque->result() as $bloques){ ?>
          <option value="<?php echo $bloques->descripcion; ?>"> <?php echo $bloques->nombre; ?></option>
       <?php } ?>
     </select>
    </div>
    <div class="col-md-6">
      <select class="mdb-select md-form" id="apartament" searchable="Buscar...">
        <option value="" disabled selected>Selecione Apartamento</option>
          <?php foreach($apartament->result() as $apartaments){ ?>
              <option value="<?php echo $apartaments->apartamento; ?>">Apartamento <?php echo $apartaments->apartamento; ?></option>
          <?php } ?>
      </select>
    </div>
</div>
<form action="<?php echo base_url(); ?>trasteos/documento" method="POST">
<div class="row">
<div class="col-md-6">
  <label for="">Documento</label>
  <input type="text" id="document" name="document" class="form-control">
</div>
<div class="col-md-6">
  <label for="">Fecha del trateo</label>
  <input type="date" name="date" id="date" class="form-control" >

</div>

</div>
<br>
<div class="row">
<div class="col-md-4">
 <label for="">Tipo de trasteo</label>
  <div class="form-check">
    <input type="radio" class="form-check-input" value="Salida" id="materialGroupExample1" name="tptrasteo">
    <label class="form-check-label" for="materialGroupExample1">Salida</label>
  </div>
  <div class="form-check">
    <input type="radio" class="form-check-input" value="Entrada" id="materialGroupExample2" name="tptrasteo">
    <label class="form-check-label" for="materialGroupExample2">Entrada</label>
  </div>
</div>
<div class="col-md-4">
<label for="">Paz y salvo</label>
  <div class="form-check">
    <input type="radio" class="form-check-input" value="Si" id="materialGroupExample3" name="pazysalvo">
    <label class="form-check-label" for="materialGroupExample3">Si</label>
  </div>
  <div class="form-check">
    <input type="radio" class="form-check-input" value="No" id="materialGroupExample4" name="pazysalvo">
    <label class="form-check-label" for="materialGroupExample4">No</label>
  </div>
</div>
<div class="col-md-4">
<label for="">Aprobado por administraciòn</label>
  <div class="form-check">
    <input type="radio" class="form-check-input" value="Si" id="materialGroupExample5" name="aprobado">
    <label class="form-check-label" for="materialGroupExample5">Si</label>
  </div>
  <div class="form-check">
    <input type="radio" class="form-check-input" value="No" id="materialGroupExample6" name="aprobado">
    <label class="form-check-label" for="materialGroupExample6">No</label>
  </div>
</div>
</div>
<br>
<button class="btn btn-outline-info btn-sm btn-rounded mx-left" id="btn-save">Guardar</button>
<button class="btn btn-outline-danger btn-sm btn-rounded mx-left" id="btn-clear">Limpiar</button>
<button class="btn btn-danger btn-sm btn-rounded mx-left" id="documento-pdf" type="submit" hidden > <li class="fas fa-file-pdf"></li> Generar Documento</button>
</form>
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

    $("#btn-save").on("click", function (e){
         e.preventDefault();
        var url1  = "<?php echo base_url(); ?>trasteos/guardar",
            bloque = $("#bloque").val(),
            apartament = $("#apartament").val(),
            document = $("#document").val(),
            date = $("#date").val(),
            tptrasteo = $("input[name='tptrasteo']:checked").val(),
            pazysalvo = $("input[name='pazysalvo']:checked").val(),
            aprobado = $("input[name='aprobado']:checked").val();

            $.ajax({
              url: url1, 
              method: "POST",
              data: { bloque: bloque, apartament: apartament, document:document, date:date, tptrasteo:tptrasteo, pazysalvo: pazysalvo, aprobado:aprobado },
              success: function () {
                Command: toastr["success"]("trasteo se ha creado satisfactoriamente", "Trasteo generado con exito")
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
                  $("#documento-pdf").prop("hidden", false);
                  $("#btn-save").prop("disabled", true);

              },
              error: function () {
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
            })
            
    });

    $("#btn-clear").on("click", function (e) {
           e.preventDefault();
            bloque = $("#bloque").val(""),
            apartament = $("#apartament").val(""),
            document = $("#document").val(""),
            date = $("#date").val(""),
            tptrasteo = $("input[name='tptrasteo']:checked").val(""),
            pazysalvo = $("input[name='pazysalvo']:checked").val(""),
            aprobado = $("input[name='aprobado']:checked").val("");
            $("#btn-save").prop("disabled", false);
            $("#documento-pdf").prop("hidden", true);
    });
});
</script>
</body>
</html>