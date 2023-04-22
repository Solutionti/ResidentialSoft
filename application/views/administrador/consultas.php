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
        
  <div class="container-fluid">
    <div class="row"> 
      <div class="col-md-12">
      <div class="row">
  <div class="col-2">
    <div class="nav  flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <a class="nav-link " id="v-pills-factura-tab" data-toggle="pill" href="#v-pills-factura" role="tab"
        aria-controls="v-pills-home" >Facturas</a>
      <a class="nav-link " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
        aria-controls="v-pills-home" >Gastos</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
        aria-controls="v-pills-profile" aria-selected="false">Visitantes</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
        aria-controls="v-pills-messages" aria-selected="false">PQRS</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
        aria-controls="v-pills-settings" aria-selected="false">Asambleas</a>
        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-setting" role="tab"
        aria-controls="v-pills-settings" aria-selected="false">Arrendatarios y Propietarios</a>
    </div>
  </div>
  <div class="col-10">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">1</div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">2</div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">3</div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">4</div>
      <div class="tab-pane fade" id="v-pills-setting" role="tabpanel" aria-labelledby="v-pills-settings-tab">5</div>
      <div class="tab-pane fade" id="v-pills-factura" role="tabpanel" aria-labelledby="v-pills-factura-tab">6</div>
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


</body>
</html>