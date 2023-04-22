<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <?php require("components/head.php"); ?>
</head>
<body class="fixed-sn black-skin">
    <?php require("components/navbar.php"); ?>
   <main>
   <nav class="navbar navbar-expand-md navbar-dark  mb-5">
  <a class="navbar-brand" href="#!">
    <img src="<?php echo base_url(); ?>public/img/logo3.png" height="30">
  </a>
  <div class="mr-auto ">
    <nav class="" aria-label="breadcrumb">
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
      <div class="col-lg-3 col-md-12 mb-4">
        <div class="card mt-3">
          <div class="">
            <i class="fas fa-money-bill-alt fa-lg primary-color z-depth-2 p-4 ml-3 mt-n3 rounded text-white"></i>
            <div class="float-right text-right p-3">
              <p class="text-uppercase text-muted mb-1"><small>Escritos</small></p>
              <h4 class="font-weight-bold mb-0"><?php echo $this->session->userdata("id"); ?></h4>
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
      <?php $pagos = $pago->result()[0] ?>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card mt-3">
          <div class="">
            <i class="fas fa-chart-line fa-lg teal z-depth-2 p-4 ml-3 mt-n3 rounded text-white"></i>
            <div class="float-right text-right p-3">
              <p class="text-uppercase text-muted mb-1"><small>Recaudos</small></p>
              <h4 class="font-weight-bold mb-0"><?php echo number_format($pagos->pagos, 0); ?></h4>
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
      <?php  $visitantes = $visitante->result()[0];  ?>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card mt-3">
          <div class="">
            <i class="fas fa-chart-line fa-lg teal z-depth-2 p-4 ml-3 mt-n3 rounded text-white"></i>
            <div class="float-right text-right p-3">
              <p class="text-uppercase text-muted mb-1"><small>Visitantes</small></p>
              <h4 class="font-weight-bold mb-0"> <?php echo $visitantes->visitantes; ?> </h4>
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
      <?php $gastos = $gasto->result()[0]; ?>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card mt-3">
          <div class="">
            <i class="fas fa-chart-pie fa-lg purple z-depth-2 p-4 ml-3 mt-n3 rounded text-white"></i>
            <div class="float-right text-right p-3">
              <p class="text-uppercase text-muted mb-1"><small>Gastos</small></p>
              <h4 class="font-weight-bold mb-0"><?php echo  number_format($gastos->gastos, 0); ?></h4>
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
        
<div class="container">
  <div class="row">
    <div class="col-lg-5">
      <section>
        <div class="card testimonial-card">
            <div class="card-up card-image" style="background-image: url(public/img/fondo.jpg); background-size: 100%;">
              <div class="rgba-black-strong h-100 p-3 white-text">
                <p class="font-weight-normal mb-0"></p>
                <p class="small mb-0 text-uppercase"></p>
              </div>
            </div>
            <div class="avatar mx-auto white">
              <img src="<?php echo base_url(); ?>public/img/conjunto.jpg" class="rounded-circle" alt="woman avatar">
            </div>
            <div class="card-body px-3 py-4">
              <div class="row">
                <div class="col-sm-4 text-center">
                  <p class="font-weight-bold mb-0">400</p>
                  <p class="small text-uppercase mb-0">Apartamentos</p>
                </div>
                <div class="col-sm-4 text-center border-left border-right">
                  <p class="font-weight-bold mb-0">20</p>
                  <p class="small text-uppercase mb-0">Bloques</p>
                </div>
                <div class="col-sm-4 text-center">
                  <p class="font-weight-bold mb-0">0</p>
                  <p class="small text-uppercase mb-0">Habitantes</p>
                </div>
              </div>
              <p class="text-auto mt-4 text-uppercase"><?php echo $this->session->userdata("name")." ".$this->session->userdata("lastname") ?></p>
              <p class="text-auto text-uppercase"><?php echo $this->session->userdata("address")?></p>
              <p class="text-auto text-uppercase">Ibague - Tolima</p>
            </div>
          </div>
      </section>
    </div>
    <div class="col-lg-7">
<div class="card">
<h5 class="card-header red darken-4 white-text text-center py-4">
    <strong>Datos del Usuario</strong>
</h5>
<div class="card-body px-lg-5 pt-0">
    <div class="text-center">
        <div class="form-row">
            <div class="col">
                <div class="md-form">
                    <input type="text" id="name"  class="form-control" value="<?php echo $this->session->userdata("name"); ?>" readonly>
                    <label>Nombre</label>
                </div>
            </div>
            <div class="col">
                <div class="md-form">
                    <input type="email" id="lastname" class="form-control" value="<?php echo $this->session->userdata("lastname") ?>" readonly>
                    <label>Apellido</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="md-form">
                    <input type="email" id="email" class="form-control" value="<?php echo $this->session->userdata("email"); ?>">
                    <label >Correo</label>
                </div>
            </div>
            <div class="col">
                <div class="md-form">
                    <input type="number" id="phone" class="form-control" value="<?php echo $this->session->userdata("phone"); ?>">
                    <label>Telefono</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="md-form">
                    <input type="text" id="address" class="form-control" value="<?php echo $this->session->userdata("address"); ?>" readonly>
                    <label >Dirección</label>
                </div>
            </div>
            <div class="col">
                <div class="md-form">
                    <input type="email" id="city" class="form-control" value="<?php echo $this->session->userdata("city").' - '.$this->session->userdata("departament"); ?>" readonly>
                    <label>Ciudad</label>
                </div>
            </div>
        </div>
        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" id="btn-actualizar">Actualizar</button>
        <hr>
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

<script>
  $(document).ready(function() {
    $("#btn-actualizar").on("click", function() {
        var url1 = "<?php echo base_url(); ?>admnistracion/actualizar/usuario",
            email = $("#email").val(),
            phone = $("#phone").val(),
            address = $("#address").val();

            $.ajax({
              url: url1,
              method: "POST",
              data: { email: email, phone: phone, address: address },
              success: function(data) {
                Command: toastr["success"]("se ha actualizado satisfactoriamente", "Administrador cambiado con exito")
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
                Command: toastr["error"]("no se pudo actualizar", "Administrador no se pudo cambiar debido a un error en la red")
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