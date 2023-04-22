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
    <div class="col-lg-7">
    <table id="dt-cell-sellection" class="table" cellspacing="0" width="100%">
  <thead>
    <tr >
      <th class="th-sm">CODIGO</th>
      <th class="th-sm">BLOQUE</th>
      <th class="th-sm">APARTAMENTO</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($apartament->result() as $apartaments){ ?>
    <tr>
      <td><?php echo $apartaments->codigo_apartamento; ?></td>
      <td>Bloque <?php echo $apartaments->bloque; ?></td>
      <td>Apto <?php echo $apartaments->apartamento; ?></td>
    </tr>
   <?php }?>
    
  </tbody>
  
</table>
    </div>
    <div class="col-lg-5">
     <div class="card">
      <h5 class="card-header red darken-4 white-text text-center py-4">
       <strong>Registrar Apartamentos</strong>
      </h5>
     <div class="card-body px-lg-5 pt-0">
      <div class="text-center" style="color: #757575;" >
        <div class="form-row mt-2">
            <div class="col">
            <select class="mdb-select md-form" id="bloque">
              <option value="" disabled selected>Seleccione el Bloque</option>
               <?php foreach($bloque->result() as $bloques) { ?>
              <option value="<?php echo $bloques->descripcion; ?>"><?php echo $bloques->nombre; ?></option>
              <?php } ?>
            </select>
            </div>
        </div>
        <div class="form-row mt-2">
            <div class="col">
                <div class="md-form">
                    <input type="text" class="form-control" id ="apartamento">
                    <label >Apartamento</label>
                </div>
            </div>
        </div>
        
         <button 
           class="btn btn-outline-info btn-sm btn-rounded  my-4 waves-effect z-depth-0"
           id="registroapartamento"
           >Registrar
         </button>
                 <hr>
                </form>
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
  <br>
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