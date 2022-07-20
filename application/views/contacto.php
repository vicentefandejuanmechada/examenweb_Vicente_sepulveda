<?php defined('BASEPATH') or exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('artilugioslacarpeta/css/bootstrap.min.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('artilugioslacarpeta/css/style2.css'); ?>" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>  
  <script src="<?php echo base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/script.js"></script>
</head>
<body>

<?php $this->load->view('menu'); ?>
<div class="container bg-primary p-3">
  <main>
<form class='contactomsg'>
    <div><label name="nombrecontac">Nombre:</label><input  type='text'  value=''></div>
    <div><label name="correocontac">Correo electronico:</label><input type='email' value=''></div>
    <div><label name="asuntoconsulta">Asunto de la consulta:</label><input type='text' value=''></div>
    <div><label name="comentariocontac">Consulta:</label><textarea rows='6' cols="37"></textarea></div>
    <div><input type='submit' name='Enviar'></div>
</form>
</main>
</div>
</body>
</html>