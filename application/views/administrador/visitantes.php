<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de Documentos</title>
    <?php require("components/head.php"); ?>
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
        <li class="breadcrumb-item active">Visitantes</li>
      </ol>
    </nav>

  </div>
</nav>
    <div class="container-fluid">
      <div class="card card-cascade wider reverse ">
</div>   
<div class="container">
  <div class="row">
    <div class="col-lg-3">
    <img src="<?php echo base_url(); ?>public/img/visitas2.png" class="img-fluid mt-5">
    </div>
    <div class="col-lg-9">
     <div class="card">
      <h5 class="card-header red darken-4 white-text text-center py-4">
       <strong>Registrar Visitantes</strong>
      </h5>
     <div class="card-body px-lg-5 pt-0">
     <div class="msjerror"></div>
      <div class="form-row">
            <div class="col offset-md-3">
                <div class="md-form">
                    <input type="email" class="form-control" id="document">
                    <label >Documento</label>
                </div>
            </div>
            <div class="col mt-3">
            <button class="btn btn-indigo btn-sm btn-rounded mt-4" id="btn-buscar"> <li class="fas fa-search"></li> Buscar</button>
            </div>
        </div>

        <div class="form-row">
            <div class="col">
                <div class="">
                <label for="materialRegisterFormFirstName">Nombre</label>
                    <input type="text"  class="form-control" id="name">
                </div>
            </div>
            <div class="col">
                <div class="">
                    <label >Apellido</label>
                    <input type="text" class="form-control" id="lastname">
                </div>
            </div>
        </div>
        <div class="form-row">
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
        </div>
        <div class="form-row">
            <div class="col">
            <div class="md-form amber-textarea active-amber-textarea">
               <textarea id="description" class="md-textarea form-control" rows="3"></textarea>
              <label>Descripción</label>
             </div>
            </div>
        </div>
         <button 
           class="btn btn-outline-info btn-sm btn-rounded  my-4 waves-effect z-depth-0"
           id="registrarvisitante"
           >  Registrar
         </button>
                 <hr>
                
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div> 
  </div>
</main>
  <br>

  <?php require("components/footer.php"); ?>
<?php require("components/scripts.php"); ?>
<script>
// Material Select Initialization
$(document).ready(function() {
$('.mdb-select').materialSelect();

$("#btn-buscar").on("click", function(){
    var url1 = "<?php echo base_url(); ?>visitantes/buscar",
        document = $("#document").val(),
        name = $("#name"),
        lastname = $("#lastname"),
        msjerror = $(".msjerror");
        $.ajax({
          url: url1,
          method: "POST",
          data: { document: document },
          success: function(data) {
            if(data === "error"){
              Command: toastr["error"]("no se encontro en la base de datos", "El visitante no se encuentra registrado")
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
             name.val(data.nombre);
             lastname.val(data.apellido);
            }  
          },
         
        });
});
$("#registrarvisitante").on("click", function(){
    var url = "<?php echo base_url(); ?>visitantes/crear",
    document = $("#document").val(),
    name = $("#name").val(),
    lastname = $("#lastname").val(),
    bloque = $("#bloque").val(),
    apartament = $("#apartament").val(),
    description = $("#description").val();

    $.ajax({
      url: url,
      method: "POST",
      data: { document: document, name: name, lastname: lastname, bloque: bloque, apartament: apartament, description: description  },
      success: function () {
        Command: toastr["success"]("El visitante se ha creado satisfactoriamente", "Visitante creado con exito")
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
})

});
</script>
</body>
</html>