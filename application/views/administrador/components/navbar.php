<header>
  <div id="slide-out" class="side-nav sn-bg-3 fixed">
    <ul class="custom-scrollbar">
      <li>
        <div class="text-center mt-3">
          <a href="#"><img src="<?php echo base_url(); ?>public/img/logo.png" width="60px;" class="img-fluid "></a>
        </div>
      </li>
      <li>
        <!-- <ul class="social">
          <li><a href="#" class="icons-sm fb-ic"><i class="fab fa-facebook-f"> </i></a></li>
          <li><a href="#" class="icons-sm pin-ic"><i class="fab fa-pinterest"> </i></a></li>
          <li><a href="#" class="icons-sm gplus-ic"><i class="fab fa-google-plus-g"> </i></a></li>
          <li><a href="#" class="icons-sm tw-ic"><i class="fab fa-twitter"> </i></a></li>
        </ul> -->
      </li>
      <br>
	  <br>
      <li>
        <ul class="collapsible collapsible-accordion">
        <li>
		    <a class="collapsible-header waves-effect arrow-r" href="<?php echo base_url(); ?>inicio"><i class="fas fa-building"></i>Inicio</a>
      </li>
      <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-user-circle"></i> Datos basicos<i
                    class="fas fa-angle-down rotate-icon"></i></a>
                <div class="collapsible-body">
                  <ul class="list-unstyled">
                    <!-- <li>
                      <a href="<?php echo base_url(); ?>bloques" class="waves-effect">Bloques</a>
                    </li> -->
                    <li>
                    <a href="<?php echo base_url(); ?>apartamentos" class="waves-effect">Apartamentos</a>
                    </li>
                    <!-- <li>
                    <a href="<?php echo base_url(); ?>tipodocumentos" class="waves-effect">Tipo de Documentos</a>
                    </li>
                    <li>
                    <a href="<?php echo base_url(); ?>tipopagos" class="waves-effect">Tipo de Pagos</a>
                    </li>
                    <li>
                    <a href="<?php echo base_url(); ?>tipousuarios" class="waves-effect">Tipo de Usuarios</a>
                    </li>
                    <li> 
                    <a href="<?php echo base_url(); ?>tipovehiculos" class="waves-effect">Registro de Vehiculos</a>
                    </li>-->
                    <li>
                    <a href="<?php echo base_url(); ?>propietarios" class="waves-effect">Propietarios</a>
                    </li> 
                    <li>
                    <a href="<?php echo base_url(); ?>arrendatarios" class="waves-effect">Arrendatarios</a>
                    </li>
                    <li>
                    <a href="<?php echo base_url(); ?>visitantes" class="waves-effect">Visitantes</a>
                    </li>
                    
                  </ul>
                </div>
              </li>
		  <li>
		    <a class="collapsible-header waves-effect arrow-r" href="<?php echo base_url(); ?>gastos"><i class="fas fa-barcode"></i> Gastos</a>
      </li>
      <li>
		    <a class="collapsible-header waves-effect arrow-r" href="<?php echo base_url();?>pagos"><i class="fas fa-hand-holding-usd"></i> Pagos</a>
      </li>
		  <li>
		    <a class="collapsible-header waves-effect arrow-r" href="<?php echo base_url(); ?>pqrs"><i class="fas fa-bullhorn"></i>PQR´s</a>
      </li>
      <li>
		    <a class="collapsible-header waves-effect arrow-r" href="<?php echo base_url(); ?>multas"><i class="fas fa-gavel"></i>Multas</a>
      </li>
		  <li>
		    <a class="collapsible-header waves-effect arrow-r" href="<?php echo base_url(); ?>Trasteos"><i class="fas fa-shipping-fast"></i> Trasteos</a>
      </li>
      <li>
		    <a class="collapsible-header waves-effect arrow-r" href="<?php echo base_url(); ?>consultas"><i class="fas fa-desktop"></i> Consultas</a>
      </li>
      <!-- <li>
		    <a class="collapsible-header waves-effect arrow-r" href="<?php echo base_url(); ?>reportes"><i class="fas fa-chart-pie"></i> Reportes</a>
      </li> -->
      <!-- <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-car-alt"></i> Parqueadero<i class="fas fa-angle-down rotate-icon"></i></a>
           <div class="collapsible-body">
            <ul class="list-unstyled">
             <li>
                <a href="<?php echo base_url(); ?>bloques" class="waves-effect">Entrada</a>
             </li>
             <li>
               <a href="<?php echo base_url(); ?>apartamentos" class="waves-effect">Salida</a>
             </li>
           </ul>
        </div>
      </li> -->
              
      <li>
		    <a class="collapsible-header waves-effect arrow-r" href="<?php echo base_url(); ?>clasificados"><i class="fas fa-check"></i>Clasificados</a>
      </li>
      <!-- <li>
		    <a class="collapsible-header waves-effect arrow-r" href="<?php echo base_url(); ?>postventa"><i class="fas fa-home"></i>Reclamaciones postventa</a>
      </li> -->
      <li>
      </li>
      <hr class="white " width="90%">
      
      <li>
		    <a class="collapsible-header  waves-effect arrow-r" href="<?php echo base_url(); ?>preguntas"><i class="fas fa-cube"></i> Votacion</a>
      </li>
      <li>
		    <a class="collapsible-header  waves-effect arrow-r" href="<?php echo base_url(); ?>tablero"><i class="fas fa-list-ol"></i> Tablero Simple</a>
      </li>
      <li>
		    <a class="collapsible-header  waves-effect arrow-r" href="<?php echo base_url(); ?>tablero2"><i class="fas fa-sort-numeric-down"></i> Tablero Multiple</a>
      </li>
      <li>
		    <a class="collapsible-header  waves-effect arrow-r" href="<?php echo base_url(); ?>logout"><i class="fas fa-power-off"></i> Cerrar Sesión</a>
      </li>
        </ul>
      </li>
    </ul>
    <div class="sidenav-bg mask-strong"></div>
  </div>
  <style>
    .indigo-color{
    background: #272d6e !important;
  }
  </style>
  <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg  black scrolling-navbar double-nav">
    <div class="float-left">
      <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fas fa-bars"></i></a>
    </div>
    <div class="breadcrumb-dn mr-auto">
      <p class="text-white">SAPH Sistema administrativo de Propiedad Horizontal</p>
    </div>
    <ul class="nav navbar-nav nav-flex-icons ml-auto">
   
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <?php echo $this->session->userdata("name") ." ".$this->session->userdata("lastname");  ?>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <!-- <a class="dropdown-item" href="#">Cambiar contraseña</a> -->
          <a class="dropdown-item" href="<?php echo base_url(); ?>logout">Cerrar Sesión</a>
        </div>
      </li>
    </ul>
  </nav>
</header>