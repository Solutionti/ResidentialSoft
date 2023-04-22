<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require("components/head.php"); ?>
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
<div class="container">
  <div class="row">
    <div class="col-lg-12">
<div class="card">
<h5 class="card-header red darken-4 white-text text-center py-4">
    <strong>Gastos</strong>
</h5>
<div class="card-body px-lg-5 pt-0">
<br>
<br>
<br>
<div class="row">
    <div class="col-md-5">
        <label>Documento</label>
        <input type="text" id="document" class="form-control">
    </div>
    <div class="col-md-5">
        <label>Nombre</label>
        <input type="text" id="name" class="form-control">
    </div>
    <div class="col-md-2">
        <label>Fecha</label>
        <input type="date" id="date" class="form-control"  >
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-4">
        <label>Cedula o Nit</label>
        <input type="text" id="nitprov" class="form-control">
    </div>
    <div class="col-md-4">
        <label>Nombre</label>
        <input type="text" id="nameprov" class="form-control">
    </div>
    <div class="col-md-4" >
        <label>Valor</label>
        <input type="number" id="value" class="form-control">
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-12">
      <div class="form-group shadow-textarea">
        <label for="exampleFormControlTextarea6">A Concepto de</label>
        <textarea
          class="form-control z-depth-1"
          id="concepto"
          rows="3"
        >
        </textarea>
      </div>
    </div>
</div>
<br>
<div class="row">
  <div class="col-md-6">
  <label >Novedad</label>
  <select class="browser-default custom-select" id="novedad">
  <option selected>Seleccione una Novedad</option>
  <option value="Electricos">Electricos</option>
  <option value="Jardineria">Jardineria</option>
  <option value="Parqueaderos">Parqueaderos</option>
  <option value="piscinas">Piscina</option>
  <option value="pasillos o escaleras">Pasillos o escaleras</option>
  <option value="fachadas">Fachadas</option>
  <option value="otra">Otra</option>
</select>
  </div>
  
</div>
<br>
<button class="btn btn-outline-info btn-sm btn-rounded" id="btn-guardar">Guardar</button>
</div>
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

<script>
 $(document).ready(function() {
  $('.mdb-select').materialSelect();

  $("#btn-guardar").on("click", function() {
   
        var url1 = "<?php echo base_url(); ?>gastos/guardar",
            document = $("#document").val(),
            name = $("#name").val(),
            date = $("#date").val(),
            nitprov = $("#nitprov").val(),
            nameprov = $("#nameprov").val(),
            value = $("#value").val(),
            concepto = $("#concepto").val(),
            novedad = $("#novedad").val();

            $.ajax({
               url: url1,
               method: "POST",
               data: { document: document, name: name, date: date, nitprov: nitprov, nameprov: nameprov, value: value, concepto: concepto, novedad: novedad },
               success: function() {
                Command: toastr["success"]("El Gasto se ha creado satisfactoriamente", "Gasto creado con exito")
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
            });
   });
 });
</script>

</body>
</html>
