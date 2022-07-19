<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<html>
    <head>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo base_url('artilugioslacarpeta/css/bootstrap.min.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('artilugioslacarpeta/css/style.css'); ?>" />

    </head>
    <body>
        

<div class="contenedor">
        <header class="superior">
            <div class="logo">
                <img src="artilugioslacarpeta/img/logo.png" alt="logo" />
            </div>
            <nav class="menu nav-bar">
                <ul>

                    <li><a href="<?php echo base_url(); ?>">Inicio</a></li>
                    <li><a href="">Quienes somos</a></li>
                    <li><a href="<?php echo base_url(); ?>#arti1">servicio</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/principal/contacto">Contacto</a></li>
                
                    <a class="dropdown"><li>
                <a class="dropdown-toggle" role="button" data-bs-toggle="dropdown">
                            Sistema
                        </a>

                        <ul class="dropdown-menu bg-primary">
                            <a class="dropdown-item bg-primary" href="<?php echo base_url(); ?>index.php/c_vehiculo/agrega_vehiculo">
                                <li>Vehiculos</li>
                            </a>
                            <a class="dropdown-item bg-primary" href="<?php echo base_url(); ?>index.php/c_vehiculo/verVehiculos">
                                <li>Ver Vehiculos</li>
                            </a>
                        </ul>
                    </li>
                </a>

                </ul>
            </nav>
        </header>
</div>


</body>
</html>