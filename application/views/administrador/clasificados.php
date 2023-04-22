<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de Documentos</title>
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
        <li class="breadcrumb-item active">Tipo de documentos</li>
      </ol>
    </nav>

  </div>
</nav>
    <div class="container-fluid">
      <div class="card card-cascade wider reverse my-2 pb-2">
</div>   
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
     <div class="card">
       <h5 class="card-header red darken-4 white-text text-center py-3">
         <strong>Clasificados Venta y arriendos</strong>
            </h5>
              <div class="card-body px-lg-5 pt-0">
                <br>
                <br>
              <table id="paginationNumbers" class="table table-hover" width="100%">
  <thead>
    <tr>
      <th class="">Bloque</th>
      <th class="">Apartamento</th>
      <th class="">Celular</th>
      <th class="">Que ofrece</th>
      <th>Tipo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($venta->result() as $ventas) { ?>
    <tr>
      <td><?php echo $ventas->bloque; ?></td>
      <td><?php echo $ventas->apartamento; ?></td>
      <td><?php echo $ventas->celular; ?></td>   
      <td><?php echo $ventas->descripcion; ?></td>
      <td><?php echo $ventas->tp_clasificado; ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
              </div>
            </div>
          </div>
        </div> 
      </div>
    
  <br>
  <br>
  <br>
  <br>
  <div class="container-fluid">
    <div class="row">
      
      <div class="col-lg-12">
     <div class="card">
       <h5 class="card-header indigo darken-4 white-text text-center py-3">
         <strong>Clasificados de servicios</strong>
            </h5>
              <div class="card-body px-lg-5 pt-0">
                <br>
                <br>
              <table id="servicios" class="table table-hover" width="100%">
  <thead>
    <tr>
      <th class="">Bloque</th>
      <th class="">Apartamento</th>
      <th class="">Celular</th>
      <th class="">Que ofrece</th>
      <th class="">Tipo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($servicio->result() as $servicios){ ?>
    <tr>
    <td><?php echo $servicios->bloque; ?></td>
      <td><?php echo $servicios->apartamento; ?></td>
      <td><?php echo $servicios->celular; ?></td>   
      <td><?php echo $servicios->descripcion; ?></td>
      <td><?php echo $servicios->tp_clasificado; ?></td>
    </tr>
    <?php } ?>
  </tbody>
  
</table>
             
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
        $(document).ready(function(){
          $('#paginationNumbers').dataTable({
           select: {
           style: 'os',
           items: 'cell'
          }
         });


         
         $('#servicios').dataTable({
           select: {
           style: 'os',
           items: 'cell'
          }
         });
        });
      </script>

</body>
</html>