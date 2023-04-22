<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrendatarios</title>
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
        <li class="breadcrumb-item active">Arrendatarios</li>
      </ol>
    </nav>

  </div>
</nav>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
<div class="card">
<h5 class="card-header red darken-4 white-text text-center py-4">
    <strong>Arrendatarios</strong>
</h5>
<div class="card-body px-lg-5 pt-0">
<br>
<br>
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
      <button class="btn btn-danger btn-rounded btn-sm mt-4" id="btn-search"> <li class="fas fa-search"></li> Buscar</button>
    </div>
</div>
<br>
<br>
<h5>Datos del Propietario</h5>
<br>
<div class="row">
  <div class="col-md-4">
    <label>Documento</label>
    <input type="text" id="document1" class="form-control" readonly>
  </div>
  <div class="col-md-4">
    <label>Correo</label>
    <input type="text" id="email1" class="form-control" readonly>
  </div>
  <div class="col-md-4">
    <label>Celular</label>
    <input type="text" id="phone1" class="form-control" readonly>
  </div>
</div>
<br>
<br>
<h5>Datos del Arrendatario</h5>
<br>
<div class="row">
    <div class="col-md-4">
         <label>Tipo de Documento</label>
        <select  id="tpdocument" class="form-control">
        <option value="" selected>Seleccione una opción</option>
          <?php foreach($document->result() as $documents) { ?>
          <option value="<?php echo $documents->codigo_tpdocumento ?>"><?php echo $documents->descripcion; ?></option>
          <?php } ?>
        </select>
    </div>
    <div class="col-md-4">
        <label>No. Documento</label>
        <input type="text" id="document" class="form-control">
    </div>
    <div class="col-md-4">
        <label>Fecha Nacimiento</label>
        <input type="date" id="nacimiento" class="form-control">
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-6">
      <label>Nombre</label>
      <input type="text" id="lastname" class="form-control">
    </div>
    <div class="col-md-6">
      <label>Apellido</label>
      <input type="text" id="secondname" class="form-control">
    </div>
    
</div>
<br>
<div class="row">
  <div class="col-md-6">
  <label >Correo</label>
  <input type="email" id="email" class="form-control">
  </div>
  <div class="col-md-6">
      <label>Celular</label>
      <input type="text" id="phone" class="form-control">
    </div>
</div>

<br>
<div class="row mt-3">
  <div class="col-md-6">
    <label>No. Parqueadero</label>
     <input type="text" class="form-control">
  </div>
  <div class="col-md-6">
   <label for="">Tipo de Usuario</label>
    <br>
  <div class="custom-control custom-radio custom-control-inline mt-1">
  <input type="radio" class="custom-control-input" value="arrendador" id="defaultInline1" name="tpusuario">
  <label class="custom-control-label" for="defaultInline1">arrendador</label>
</div>
  </div>
</div>
<br>
<h5>Contacto de emergencia</h5>
<div class="row mt-4">
<div class="col-md-4">
  <label>Nombre de la Persona</label>
  <input type="text" id="cename" class="form-control">
</div>
<div class="col-md-4">
  <label>Celular</label>
  <input type="text" id="cephone" class="form-control">
</div>
<div class="col-md-4">
  <label>Parentesco</label>
  <input type="text" id="ceparentesco" class="form-control">
</div>
</div>
<br>
<br>
<button class="btn btn-outline-info btn-sm btn-rounded" id="btnguardar">Guardar</button>
<button class="btn btn-outline-danger btn-sm btn-rounded">Actualizar</button>
</form>

     </div>
   </div>
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
<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
 $(document).ready(function() {
  $('.mdb-select').materialSelect();

    $("#btn-search").on("click", function() {
        var url1 = "<?php echo base_url(); ?>propietarios/buscar",
            bloque = $("#bloque").val(),
            apartament = $("#apartament").val(),
            document1 = $("#document1"),
            email1 = $("#email1"),
            phone1 = $("#phone1");

            $.ajax({
               url: url1,
               method: "POST",
               data: { bloque: bloque, apartament: apartament },
               success: function (data) {
                  if (data === "error"){
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
                    document1.val(data.documento);
                    email1.val(data.correo);
                    phone1.val(data.celular);
                  }
               }
            });
        });

        $("#btnguardar").on("click", function () {
            var url2 = "<?php echo base_url(); ?>arrendatarios/guardar",
                bloque = $("#bloque").val(),
                apartament = $("#apartament").val(),
                document1 = $("#document1").val(),
                tpdocument = $("#tpdocument").val(),
                document = $("#document").val(),
                nacimiento = $("#nacimiento").val(),
                lastname = $("#lastname").val(),
                secondname = $("#secondname").val(),
                email= $("#email").val(),
                phone = $("#phone").val(),
                tpusuario = $("input[name='tpusuario']:checked").val(),
                cename = $("#cename").val(),
                cephone = $("#cephone").val(),
                ceparentesco = $("#ceparentesco").val();

                $.ajax({
                  url: url2,
                  method: "POST",
                  data: { bloque:bloque, apartament:apartament, document1:document1, tpdocument:tpdocument, document:document, nacimiento:nacimiento, lastname:lastname, secondname:secondname, email:email, phone:phone, tpusuario:tpusuario, cename:cename, cephone:cephone, ceparentesco:ceparentesco }, 
                  success: function (data) {

                    if(data === "error") {
                      Command: toastr["error"]("no se pudo crear", "el usuario ya existe en la base de datos");
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
                    else{
                      Command: toastr["success"]("El Arrendatario se ha creado satisfactoriamente", "Arrendatario creado con exito");
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
                  }
                });
        }); 
 });
</script>
</body>
</html>