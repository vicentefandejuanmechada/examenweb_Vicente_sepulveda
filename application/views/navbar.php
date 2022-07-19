<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="contenedor">
    <header class="superior">
        <div class="logo">
          <a href="<?php echo base_url(); ?>"> <img src="<?php echo base_url('artilugioslacarpeta/img/logo.png');?>" alt="Logo" ></a>
        </div>
        <nav class="menu nav-bar"></nav>
        <ul>
            <a href="">
            <li>Inicio</li></a>
        </ul>
        <a href="<?php echo base_url();?>#servicio">
    <li>Servicio</li></a>
    <a href="<?php echo base_url(); ?>index.php/principal/contacto">
                    <li>Contacto</li>
                </a>

        <a href="dropdown">
            <li>
                <a href="dropdown-toggle" role="button" data-bs-toggle="dropdown">
                Sistema
                </a>
                <ul class ="dropdown-menu bg-primary">
                    <a class="dropdown-item  bg-primary" href="<?php echo base_url(); ?>index.php/vehiculo/insert_vehiculo">
                        <li>Vehiculos</li>
                    </a>
                    <a class="dropdown-menu bg-primary" href="<?php echo base_url();?>">
                        <li> Ver Vehiculos</li>
                    </a>

                </ul>
            </li>
        </a>
        </header>
</div>