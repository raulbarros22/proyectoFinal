<?php
session_start();

include("dbConnector.php");
$baseDatos->beginTransaction();
try {
  $query="select * from CLIENTES where email='" . $_SESSION['email']. "'";
  $consulta=$baseDatos->prepare($query);
  $consulta->execute();
  $result=$consulta->fetch();
  if ($result==NULL) {
    $error .= 'Usuario Inexistente!! <br>';
  }

} catch (\Exception $e) {
  $baseDatos->rollBack(); echo $e->getMessage();
}


 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <title>PerfilUsurario</title>
  <?php
   require('head.php');
   ?>
</head>
<body>
  <?php
  require('navbarg.php');
   ?>

  <div class="container mt-5">
    <h2 class="text-center">Perfil de Usuario</h2>
      <div class="row justify-content-center">

          <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="well well-sm">
                  <div class="row">

                      <div class="col-sm-6 col-md-4">
                          <img src="imgs/imgProfiles/<?=$result["imgPerfil"]?>" alt="" class="img-rounded img-responsive" width="100%">
                      </div>
                      <div class="col-sm-6 col-md-8">
                          <h4><?= $result["nombre"]. " ".$result["apellido"] ?></h4>
                          <!-- <small><cite title="San Francisco, USA">Rosario, Argentina<i class="fas fa-map-marker px-1"></i></cite></small> -->

                              <i class="fas fa-envelope-open-text prefix px-1"></i><h6><?= $result["email"]?></h6>

                              <br />

                              <br />
                              <h6>Telefono: <?=$result["telefono"]?></h6>
                              <!-- <i class="far fa-calendar-alt px-1"></i> 24 Junio de 1989</p> -->


                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>



<section class="fondo view">
<div class="mask rgba-black-light">

</div>
</section>
<br><br><br><br><br>

<?php
require('footer.php');
 ?>
</body>
</html>
