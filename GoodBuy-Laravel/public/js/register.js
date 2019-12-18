
    function validar(formulario){
    var regexEmail= /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    var nombre,apellido,dni,domicilio,email,password1,password2,telefono;
    nombre=document.getElementById("name").value;
    apellido=document.getElementById("surname").value;
    dni=document.getElementById("dni").value;
    email=document.getElementById("email").value;
    password1=document.getElementById("password").value;
    password2=document.getElementById("password-confirm").value;
    domicilio=document.getElementById("address").value;

     telefono=document.getElementById("telefono").value;


    if(nombre === "")
{
   swal("ERROR","El campo nombre esta vacio","error");
    document.getElementById("name").focus();
    return false;

  }else if(nombre.length>50 || nombre.length<3){
     swal("ERROR","Los nombres deben contar con entre 3 y 50 caracteres", "error");
     // nombre.setCustomValidity("Nombre no puede tener menos de 3 caracteres");
        document.getElementById("name").focus();
    return false;
  }else if(apellido=== ""){
     swal("ERROR","El campo apellido esta vacio","error");
        document.getElementById("surname").focus();
    return false;
  }else if(apellido.length>50 || apellido.length<3){
     swal("ERROR","El apellido deben contar entre 3 y 50 caracteres","error");
             document.getElementById("surname").focus();
    return false;
  }else if(dni=== ""){
     swal("ERROR","El campo dni esta vacio","ERROR");
        document.getElementById("dni").focus();
    return false;
  }else if(dni.length<8 || dni.length>8){
     swal("ERROR","El dni deben contar 8 caracteres","error");
             document.getElementById("dni").focus();
    return false;
  }
  else if(domicilio=== ""){
     swal("ERROR","El campo domicilio esta vacio","error");
        document.getElementById("address").focus();
    return false;
  }else if(domicilio.length>50 || domicilio.length<5){
     swal("ERROR","El domicilio deben contar entre 5 y 50 caracteres","error");
             document.getElementById("address").focus();
    return false;
  }else if(email=== ""){
     swal("ERROR","El campo email esta vacio","error");
        document.getElementById("address").focus();
    return false;
  }
  else if(!regexEmail.test(email)){
  swal("ERROR","Correo formato invalido","error");
    document.getElementById("email").focus();
  return false;
}else if(telefono=== ""){
     swal("ERROR","El campo telefono esta vacio","error");
        document.getElementById("telefono").focus();
    return false;
  }else if(telefono.length<10 || telefono.length>10){
     swal("ERROR","El telefono deben contener 10 numeros","error");
             document.getElementById("telefono").focus();
    return false;
  }


  else if(password1=== ""){
     swal("ERROR","El campo contraseña esta vacio","error");
            document.getElementById("password").focus();
    return false;
  }else if(email=== "" ){
swal("ERROR","El campo email esta vacio","error");
      document.getElementById("email").focus();
return false;
}


  else if(password1.length>40 || password1.length<8){
     swal("ERROR","La contraseña debe contar entre 8 y 40 caracteres","error");
       document.getElementById("password").focus();
    return false;
        }else if(password2=== ""){
     swal("ERROR","Verifique su contraseña","error");
       document.getElementById("password-confirm").focus();
    return false;
        }


    if(password1 === password2){
        }else{
            swal("ERROR","Las contraseñas no coinciden","error");
              document.getElementById("password-confirm").focus();
    return false;
            }

    }
