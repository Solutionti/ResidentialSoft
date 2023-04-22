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
   <!-- <nav class="navbar navbar-expand-md navbar-dark  mb-5">
  <a class="navbar-brand" href="#!">
    <img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" height="30" alt="MDB logo">
  </a>
  <div class="mr-auto">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb d-inline-flex pl-0 pt-0">
        <li class="breadcrumb-item"><a class="white-text" href="#!">Administración</a></li>
        <li class="breadcrumb-item active">Tablero de Resultados</li>
      </ol>
    </nav>

  </div>
</nav> -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="<?php echo base_url(); ?>public/img/logo.png" width="60px;" class="img-fluid">
                <h3 class="mt-2 font-weight-bold">TABLERO DE RESULTADOS</h3>
            </div>
        </div>
    </div>
    <br>
    <?php $preguntas = $preguntas1->result()[0]; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <h4>Pregunta Activa </h4>
                <h5 class="font-weight-bold indigo-text">¿ <?php echo $preguntas->pregunta; ?> ?</h5>
                 <ol class="lead">
                     <li><?php echo $preguntas->si; ?></li>
                     <li><?php echo $preguntas->no; ?></li>
                     <li><?php echo $preguntas->blanco; ?></li>
                 </ol>
                 <br>
                 <h5>Quedan <span class="red-text"> 5:00 </span> Minutos para cerrar la votación</h5>
            </div>
            <div class="col-md-2">
                <h4 class="font-weight-bold text-center">INICIAL</h4>
                <h1 class="text-center">50.1%</h1>
            </div>
            <div class="col-md-2">
                <h4 class="font-weight-bold text-center">QUARUM</h4>
                <h1 class="text-center">80%</h1>
            </div>
        </div>
    </div>
    <div class="container mt-5">
    <div class="row">
        <div class="col-md-2 offset-md-1">
        <label class="text-center">TOTAL <?php echo $preguntas->si;  ?></label>
        <input type="text" class="form-control" id="totalsi"  readonly>
        </div>
        <div class="col-md-2 offset-md-2">
        <label class="text-center">TOTAL <?php echo $preguntas->no;  ?></label>
        <input type="text" class="form-control" id="totalno"  readonly>
        </div>
        <div class="col-md-2 offset-md-2">
        <label class="text-center">TOTAL <?php echo $preguntas->blanco;  ?></label>
        <input type="text" class="form-control" id="totalblanco"  readonly>
        </div>
    </div>
    </div>
    <br>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>GANADOR</h1>
                <h2 class="red-text font-weight-bold" id="ganador"></h2>
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
        
        const intervalo = setInterval(function() {
            var pet1 = peticionCountSi();
            var pet2 = peticionCountNo();
            var pet3 = peticionCountBlanco();
            
            if($("#totalsi").val() > $("#totalno").val()){
                $("#ganador").text("SI");
            }
            else if ($("#totalno").val() > $("#totalsi").val()) {
                $("#ganador").text("NO");
            }
            else {
                $("#ganador").text("BLANCO");
            }
            
        },1000);

        function peticionCountSi() {
           var url1 = "<?php echo base_url(); ?>tablero/contarsi";
           $.ajax({
            url: url1,
            method: "GET",
            success: function (data) {
                data = JSON.parse(data);
                $("#totalsi").val(data);
            }
         });
       }
       function peticionCountNo() {
           var url1 = "<?php echo base_url(); ?>tablero/contarno";
           $.ajax({
            url: url1,
            method: "GET",
            success: function (data) {
                data = JSON.parse(data);
                $("#totalno").val(data);
            }
         });
       }
       function peticionCountBlanco() {
           var url1 = "<?php echo base_url(); ?>tablero/contarblanco";
           $.ajax({
            url: url1,
            method: "GET",
            success: function (data) {
                data = JSON.parse(data);
                $("#totalblanco").val(data);
            }
         });
       }
    });
</script>

</body>
</html>