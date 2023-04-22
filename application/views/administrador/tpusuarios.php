<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de Documentos</title>
    <?php require("components/head.php"); ?>
</head>
<body class="fixed-sn cyan-skin">
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
        <li class="breadcrumb-item active">Tipo de Usuarios</li>
      </ol>
    </nav>

  </div>
</nav>
    <div class="container-fluid">
      <div class="card card-cascade wider reverse my-2 pb-2">
</div>   
<div class="container">
  <div class="row">
    <div class="col-lg-5">
     <table class="table  table-stripped table-hover">
     <thead class="cyan darken-4 text-white text-uppercase">
        <th>Codigo</th>
        <th>descripción</th>
        <th>Acciones</th>
     </thead>
     <tbody>
        <tr>
          <td>1</td>
          <td>Efectivo</td>
          <td></td>
        </tr>
     </tbody>
     </table>
    </div>
    <div class="col-lg-6">
     <div class="card">
      <h5 class="card-header cyan darken-4 white-text text-center py-4">
       <strong>Registrar Tipo de Usuarios</strong>
      </h5>
     <div class="card-body px-lg-5 pt-0">
      <form class="text-center" style="color: #757575;" action="#!">
        <div class="form-row mt-2">
            <div class="col">
                <div class="md-form">
                    <input type="text" class="form-control">
                    <label for="materialRegisterFormLastName">Tipo Usuario</label>
                </div>
            </div>
        </div>
         <button 
           class="btn btn-outline-info btn-sm btn-rounded  my-4 waves-effect z-depth-0"
           type="submit">Registrar
         </button>
         <button 
           class="btn btn-outline-danger btn-sm btn-rounded  my-4 waves-effect z-depth-0"
           type="submit">Actualizar
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
</body>
</html>