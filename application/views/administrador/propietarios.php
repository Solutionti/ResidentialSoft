<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propietarios</title>
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
        <li class="breadcrumb-item active">Propietarios</li>
      </ol>
    </nav>

  </div>
</nav>     
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
<div class="card">
<h5 class="card-header red darken-4 white-text text-center py-4">
    <strong>Propietarios</strong>
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
                      <option value="<?php echo $apartaments->apartamento; ?>">Apartamento <?php echo $apartaments->apartamento; ?></option>
                      <?php } ?>
                   </select>
            </div>
    <div class="col mt-2">
      <button class="btn btn-indigo btn-rounded btn-sm mt-4" id="btn-search">  Buscar</button>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-4">
        <label>Tipo de Documento</label>
        <select  id="tpdocument" class="form-control">
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
        <input type="date" id="nacimiento"  class="form-control">
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
     <input type="text" id="parqueadero" class="form-control">
  </div>
  <div class="col-md-6">
   <label for="">Tipo de Usuario</label>
    <br>
  <div class="custom-control custom-radio custom-control-inline mt-1">
  <input type="radio" class="custom-control-input" id="propietario" value="propietario" name="tipousuario">
  <label class="custom-control-label" for="propietario">Propietario</label>
</div>
<div class="custom-control custom-radio custom-control-inline" >
  <input type="radio" class="custom-control-input selected " id="todos" value="todos" name="tipousuario">
  <label class="custom-control-label" for="todos">Todos</label>
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
<button class="btn btn-outline-info btn-sm btn-rounded" id="btn-save">Guardar</button>
<button class="btn btn-outline-danger btn-sm btn-rounded" id="btn-update" disabled>Actualizar</button>
<button class="btn btn-outline-primary btn-sm btn-rounded" id="btn-clear">Limpiar</button>
      </div>

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

  $("#btn-search").on("click", function (e) {
    e.preventDefault();
      var url1 = "<?php echo base_url(); ?>propietarios/buscar",
          bloque = $("#bloque").val(),
          apartament = $("#apartament").val(),
          document = $("#document"),
          nacimiento = $("#nacimiento"),
          lastname = $("#lastname"),
          secondname = $("#secondname"),
          email = $("#email"),
          phone = $("#phone"),
          parqueadero = $("#parqueadero"),
          cename = $("#cename"),
          cephone = $("#cephone"),
          ceparentesco = $("#ceparentesco");

          $.ajax({
            url: url1,
            method: "POST",
            data: { bloque: bloque, apartament: apartament },
            success: function (data) {
              if(data === "error"){
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
                  nacimiento.val(data.fecha_nacimiento);
                  lastname.val(data.nombre);
                  secondname.val(data.apellido);
                  email.val(data.correo);
                  phone.val(data.celular);
                  parqueadero.val(data.documento);
                  cename.val(data.ce_nombre);
                  cephone.val(data.ce_celular);
                  ceparentesco.val(data.ce_parentesco);
                  if(data.tp_usuario == "todos"){
                    $("#todos").prop("checked", true);
                  }
                  else {
                    $("#propietario").prop("checked", true);
                  }
                  $("#btn-save").prop("disabled", true);
                  $("#btn-update").prop("disabled", false);

              }
            }
          })
       });

       $("#btn-save").on("click", function(){
         var url2 = "<?php echo base_url(); ?>propietarios/guardar",
          bloque = $("#bloque").val(),
          apartament = $("#apartament").val(),
          tpdocument = $("#tpdocument").val(),
          document = $("#document").val(),
          tpusuario = $("input[name='tipousuario']:checked").val(),
          nacimiento = $("#nacimiento").val(),
          lastname = $("#lastname").val(),
          secondname = $("#secondname").val(),
          email = $("#email").val(),
          phone = $("#phone").val(),
          parqueadero = $("#parqueadero").val(),
          cename = $("#cename").val(),
          cephone = $("#cephone").val(),
          ceparentesco = $("#ceparentesco").val();

          $.ajax({
            url: url2,
            method: "POST",
            data: { bloque: bloque, apartament: apartament, tpdocument: tpdocument, document: document, tpusuario: tpusuario, nacimiento: nacimiento, lastname: lastname, secondname: secondname, email: email, phone: phone, parqueadero: parqueadero, cename: cename, cephone: cephone, ceparentesco: ceparentesco },
            success: function (data) {
              if(data === "error"){
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
              else {
                Command: toastr["success"]("El propietario se ha creado satisfactoriamente", "Propietario creado con exito");
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
            },
          });
       });
       
       $("#btn-clear").on("click", function(e) {
         e.preventDefault();
          bloque = $("#bloque").val(""),
          apartament = $("#apartament").val(""),
          tpdocument = $("#tpdocument").val(""),
          document = $("#document").val(""),
          tpusuario = $("input[name='tipousuario']:checked").val(""),
          nacimiento = $("#nacimiento").val(""),
          lastname = $("#lastname").val(""),
          secondname = $("#secondname").val(""),
          email = $("#email").val(""),
          phone = $("#phone").val(""),
          parqueadero = $("#parqueadero").val(""),
          cename = $("#cename").val(""),
          cephone = $("#cephone").val(""),
          ceparentesco = $("#ceparentesco").val("");
          $("#btn-save").prop("disabled", false);
          $("#btn-update").prop("disabled", true);
       });
 });
</script>
</body>
</html>