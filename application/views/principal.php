<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller Don gualo</title>
    <script src="<?php echo base_url(); ?>artilugioslacarpeta/js/bootstrap.min.js"></script>  
    <script src="<?php echo base_url(); ?>artilugioslacarpeta/js/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url(); ?>artilugioslacarpeta/js/script.js"></script>
</head>
<body>
<?php $this->load->view('navbar'); ?>
<section>
    <img src="<?php echo base_url('artilugioslacarpeta/img/principal.jpg')?>" alt="" id="imgprincipal" >
</section>    
<section>
            <h1 class="titulo">Bienvenidos a Taller Don Gualo</h1>
            <article class="art1">
                <h2>Mecánica en General</h2>
                <ul>
                    <li><a>Ajuste de Motor</a></li>
                    
                    <li> Cambio de Empaquetadura</li>
                    
                    <li>Reparación de Frenos</li>
                    <li>Caja de Cambios</li>
                    <li>Afinamiento</li>
                </ul>
                <img src="<?php('artilugioslacarpeta/img/mecanica.jpg'); ?>" alt="" />
            </article>
            <article class="art2">
                <h2>Mecánica en General</h2>
                <ul>
                
                    <li>Cierre centralizado</li>
                    
                    
                    <li> Alarmas</li>
                    
                    <li>Alzavidrios</li>
                    
                    <li>Luces</li>
                    
                    <li>Reparación Circuito Eléctrico</li>
                </ul>
                <img src="<?php echo base_url('artilugioslacarpeta/img/electricidad.jpg');?>" alt="" />
            </article>

        </section>
        <footer class="pie">
            <div class="numero">
                <img src="img/logo.png" alt="imagen logo footer" />
                <p>Estamos Ubicados en Chanquico Sur S/N - San Javier</p>
                <p>Llámanos al +569 12312345</p>
            <br>
            
            </div>
            <div class="imgsn">
                <p>siguenos en:</p>
                <li>
                <a href="https://www.instagram.com/"><img  src="<?php echo base_url('artilugioslacarpeta/img/insta.png'); ?>"/></a>
                </li>
                <li>
                <a href="https://www.twitter.com/"><img  src="<?php echo base_url ('artilugioslacarpeta/img/twt.png');?>"/></a>
              </li>
            </div>

        </footer>
    </div>


</body>
</html>