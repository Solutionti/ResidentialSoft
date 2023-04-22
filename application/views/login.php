
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Iniciar sesión</title>
  <link  rel="icon"  href="<?php echo base_url(); ?>public/img/logo2.ico" type="image/ico" />
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/login.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-7">
            <img src="https://cdn.pixabay.com/photo/2018/04/07/03/06/real-estate-3297625_960_720.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-5">
            <div class="card-body ">
              <div class="brand-wrapper text-center">
                <img src="<?php echo base_url(); ?>public/img/logo.png" alt="logo" class="logo">
              </div>
                 <div class="msj-error"></div>
                  <div class="form-group">
                    <label for="email" class="sr-only">Usuario</label>
                    <input type="email"  id="user" class="form-control" placeholder="Usuario" autocomplete="off">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password"  id="password" class="form-control" placeholder="Contraseña">
                  </div>
                  <button name="login" id="login" class="btn btn-block login-btn btn-dark mb-4" type="submit">Iniciar</button>
                
                <a href="#" class="forgot-password-link">¿Se te olvidó tu contraseña?</a>
                <p class="login-card-footer-text">¿No tienes una cuenta?<a href="#!" class="text-reset"> Registrar aquí</a></p>
                <!-- <nav class="login-card-footer-nav">
                  <a href="#">Terminos de uso.</a>
                  <a href="#">Política de privacidad</a>
                </nav> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="<?php echo base_url(); ?>public/js/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
  <script>
   $(document).ready(function() {
      $("#login").on("click", function(e) {
            e.preventDefault();
            var url1 = "<?php echo base_url(); ?>login",
            user = $("#user").val(),
            password = $("#password").val(),
            msjerror = $(".msj-error");
            
            $.ajax({
              url: url1,
              method: "POST",
              data: { user: user, password: password},
              success: function(resp) {
                if( resp === "error") {
                  msjerror.html('<div class="alert alert-danger">El usuario y contraseña ingresado son invalidos.</div>');
                }
                else {
                  location.replace("<?php echo base_url(); ?>inicio");
                }
           }
      })
   });
   });
  </script>
</body>
</html>
