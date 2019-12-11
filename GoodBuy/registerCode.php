<?php
include("dbConnector.php");
$error='';

if($_SERVER['REQUEST_METHOD'] == 'POST'){


  if(empty($_POST["firstname"])){
    $error .= 'Por favor ingrese un nombre <br>';
  }

  if(empty($_POST['lastname'])){
    $error .= 'Por favor ingrese un apellido <br>';
  }

  if(empty($_POST['email'])){
    $error .= 'Por favor introduce un email <br>';
  }elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
     $error .= 'Introduce un email valido <br>';
  }


  if(empty($_POST['phone'])){
     $error .= 'Por favor introduce el Telefono <br>';
  }elseif (!(is_numeric($_POST['phone']))) {
    $error .= 'El telefono debe ser numerico <br>';
    $_POST['phone']=NULL;
  }

  if(empty($_POST['password1']) && empty($_POST['password2'])){
     $error .= 'Por favor introduce contraseña en los dos campos <br>';
  }elseif( $_POST['password1'] != $_POST['password2']){
     $error .= 'Las contraseñas no coinciden <br>';
  }elseif (strlen($_POST['password1'])<8) {
    $error.= 'La contraseña debe tener al menos 8 caracteres <br>';
  }


  if($_FILES&&$error=='') {
    if($_FILES['imgProfile']['error']  !=0){
      $error .= 'Por favor introduce ambas contraseñas <br>Hubo un error en la carga de la imagen de perfil <br>';

    }else{
       $ext = pathinfo($_FILES['imgProfile']['name'], PATHINFO_EXTENSION);
       if($ext != 'jpg' && $ext!='jpeg' && $ext !='png'){
         $error .= 'Por favor introduce ambas contraseñas <br>El formato de imagen no es valido <br>';

       }else{
         $imgPerfil = $_POST['firstname'].$_POST['lastname'].'.'.$ext;
         move_uploaded_file($_FILES['imgProfile']['tmp_name'], "imgs/imgProfiles/$imgPerfil");
       }
    }
  }

  if($error == ''){
    $nombre = trim($_POST['firstname']);
    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    $apellido = trim($_POST['lastname']);
    $apellido = filter_var($apellido, FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $pass=password_hash($_POST["password1"],PASSWORD_DEFAULT);
    $telefono=$_POST["phone"];
    $baseDatos->beginTransaction();
    try {
      $consulta=$baseDatos->prepare("Insert into clientes values(default,:nombre,:apellido,:email,:pass,:telefono,:imgPerfil)");
      $consulta->bindValue(":nombre",$nombre);
      $consulta->bindValue(":apellido",$apellido);
      $consulta->bindValue(":email",$email);
      $consulta->bindValue(":pass",$pass);
      $consulta->bindValue(":telefono",$telefono);
      $consulta->bindValue(":imgPerfil",$imgPerfil);
      $consulta->execute();
      $baseDatos->commit();
      session_start();
      $_SESSION["name"]=$nombre." ".$apellido;
      $_SESSION["email"]=$email;
      header("location:index.php");
    } catch (\Exception $e) {
      $baseDatos->rollBack(); echo $e->getMessage();
    }
  }
}

?>
