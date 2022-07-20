<?php 
defined('BASEPATH') or exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('artilugioslacarpeta/css/bootstrap.min.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('artilugioslacarpeta/css/style.css'); ?>" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>  
  <script src="<?php echo base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/script.js"></script>
    <title>Document</title>
</head>
<body>
<?php $this->load->view('menu'); ?>
<main>
<div class="container bg-primary p-3">
        <form action="<?php echo base_url()?>index.php/principal/ agrega_vehiculo" method="get">
        <label for="idpatente">patente</label>
        <input type="text" name="CampoPatente" id="idpatente">
        <label for="idmarca">Marca</label>
        <input type="text" name="CampoMarca" id="idmarca">
        <label for="idmodelo">Modelo</label>
        <input type="text" name="CampoModelo" id="idmodelo">
        <label for="idcolor">Color</label>
        <input type="text" name="CampoColor" id="idcolor">
        <input type="submit" value="GUARDAR">
    </form>
</div>
    </main>

</body>
</html>