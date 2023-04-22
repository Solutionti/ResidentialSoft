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
                     <li><?php echo $preguntas->opcion1; ?></li>
                     <li><?php echo $preguntas->opcion2; ?></li>
                     <li><?php echo $preguntas->opcion3; ?></li>
                     <li><?php echo $preguntas->opcion4; ?></li>
                     <li><?php echo $preguntas->opcion5; ?></li>
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
    <div class="container-fluid mt-5">
    <div class="row">
    <div class="col-md-2 offset-md-1 text-center">
        <small class="green-text">Respuesta1</small>
        <label class="text-center">TOTAL <br> <span class="indigo-text font-weight-bold" id="uno"><?php echo $preguntas->opcion1;  ?></span></label>
        <input type="text" class="form-control" id="res1" value="" readonly>
    </div>
    <div class="col-md-2 text-center">
        <small class="green-text">Respuesta2</small>
        <label class="text-center">TOTAL <br> <span class="indigo-text font-weight-bold" id="dos"><?php echo $preguntas->opcion2;  ?></span></label>
        <input type="text" class="form-control" id="res2" value="" readonly>
    </div>
    <div class="col-md-2 text-center">
        <small class="green-text">Respuesta3</small>
        <label class="text-center">TOTAL <br> <span class="indigo-text font-weight-bold" id="tres"><?php echo $preguntas->opcion3;  ?></span></label>
        <input type="text" class="form-control" id="res3" value="" readonly>
    </div>
    <div class="col-md-2 text-center">
        <small class="green-text">Respuesta4</small>
        <label class="text-center">TOTAL <br> <span class="indigo-text font-weight-bold" id="cuatro"><?php echo $preguntas->opcion4;  ?></span></label>
        <input type="text" class="form-control" id="res4" value="" readonly>
    </div>
    <div class="col-md-2 text-center">
        <small class="green-text">Respuesta5</small>
        <label class="text-center">TOTAL <br> <span class="indigo-text font-weight-bold" id="cinco"><?php echo $preguntas->opcion5;  ?></span></label>
        <input type="text" class="form-control" id="res5" value="" readonly>
    </div>
    </div>
    </div>
    <br>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>GANADOR</h1>
                <h2 class="red-text font-weight-bold" id="ganadores"></h2>
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
            countRespuesta1();
            countRespuesta2();
            countRespuesta3();
            countRespuesta4();
            countRespuesta5();

            if ($("#res1").val() > $("#res2").val()) {
                var uno = $("#uno").html();
                $("#ganadores").text(uno);
            }
            else if( $("#res1").val() > $("#res3").val()) {
                 var uno = $("#uno").html();
                $("#ganadores").text(uno);
            }
            else if($("#res1").val() > $("#res4").val()) {
                 var uno = $("#uno").html();
                $("#ganadores").text(uno);
            }
            else if($("#res1").val() > $("#res5").val()) {
                 var uno = $("#uno").html();
                $("#ganadores").text(uno);
            }
            else if($("#res2").val() > $("#res1").val()) {
                 var dos = $("#dos").html();
                $("#ganadores").text(dos);
            }
            else if($("#res2").val() > $("#res3").val()) {
                 var dos = $("#dos").html();
                $("#ganadores").text(dos);
            }
            else if($("#res2").val() > $("#res4").val()) {
                 var dos = $("#dos").html();
                $("#ganadores").text(dos);
            }
            else if($("#res2").val() > $("#res5").val()) {
                 var dos = $("#dos").html();
                $("#ganadores").text(dos);
            }
            else if($("#res3").val() > $("#res1").val()) {
                 var tres = $("#tres").html();
                $("#ganadores").text(tres);
            }
            else if($("#res3").val() > $("#res2").val()) {
                 var tres = $("#tres").html();
                $("#ganadores").text(tres);
            }
            else if($("#res3").val() > $("#res4").val()) {
                 var tres = $("#tres").html();
                $("#ganadores").text(tres);
            }
            else if($("#res3").val() > $("#res5").val()) {
                 var tres = $("#tres").html();
                $("#ganadores").text(tres);
            }
            else if($("#res4").val() > $("#res1").val()) {
                 var cuatro = $("#cuatro").html();
                $("#ganadores").text(cuatro);
            }
            else if($("#res4").val() > $("#res2").val()) {
                 var cuatro = $("#cuatro").html();
                $("#ganadores").text(cuatro);
            }
            else if($("#res4").val() > $("#res3").val()) {
                 var cuatro = $("#cuatro").html();
                $("#ganadores").text(cuatro);
            }
            else if($("#res4").val() > $("#res5").val()) {
                 var cuatro = $("#cuatro").html();
                $("#ganadores").text(cuatro);
            }
            else if($("#res5").val() > $("#res1").val()) {
                 var cinco = $("#cinco").html();
                $("#ganadores").text(cinco);
            }
            else if($("#res5").val() > $("#res2").val()) {
                 var cinco = $("#cinco").html();
                $("#ganadores").text(cinco);
            }
            else if($("#res5").val() > $("#res3").val()) {
                 var cinco = $("#cinco").html();
                $("#ganadores").text(cinco);
            }
            else if($("#res5").val() > $("#res4").val()) {
                 var cinco = $("#cinco").html();
                $("#ganadores").text(cinco);
            }
        },1000);

        function countRespuesta1() {
            var url1 = "<?php echo base_url(); ?>tablero/contarrespuesta1";
           $.ajax({
            url: url1,
            method: "GET",
            success: function (data) {
                data = JSON.parse(data);
                $("#res1").val(data);
            }
          });
        }

        function countRespuesta2() {
            var url1 = "<?php echo base_url(); ?>tablero/contarrespuesta2";
           $.ajax({
            url: url1,
            method: "GET",
            success: function (data) {
                data = JSON.parse(data);
                $("#res2").val(data);
            }
          });
        }

        function countRespuesta3() {
            var url1 = "<?php echo base_url(); ?>tablero/contarrespuesta3";
           $.ajax({
            url: url1,
            method: "GET",
            success: function (data) {
                data = JSON.parse(data);
                $("#res3").val(data);
            }
          });
        }

        function countRespuesta4() {
            var url1 = "<?php echo base_url(); ?>tablero/contarrespuesta4";
           $.ajax({
            url: url1,
            method: "GET",
            success: function (data) {
                data = JSON.parse(data);
                $("#res4").val(data);
            }
          });
        }

        function countRespuesta5() {
            var url1 = "<?php echo base_url(); ?>tablero/contarrespuesta5";
           $.ajax({
            url: url1,
            method: "GET",
            success: function (data) {
                data = JSON.parse(data);
                $("#res5").val(data);
            }
          });
        }

     });
 </script>

</body>
</html>