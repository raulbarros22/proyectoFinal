// window.onload=function(){
  // var nombre=document.querySelector('input[name=name]');
  // var apellido=document.querySelector('input[name=surname]');
  // var dni=document.querySelector('input[name=dni]');
  // var domicilio=document.querySelector('input[name=address]');
  // var email=document.querySelector('input[name=email]');
  // var telefono=document.querySelector('input[name=telefono]');
  // var contraseña1=document.querySelector('input[name=password]');
  // var contraseña2=document.querySelector('input[name=password_confirmation]');
  // var formulario=document.getElementById('form-register');
  //
  // formulario.onsubmit=function(event){
  //
  //     if (nombre.value.length=='') {
  //       alert("Nombre no puede estar vacio");
  //       event.preventDefault();
  //     }else if (nombre.value.length<3) {
  //       nombre.setCustomValidity("Nombre no puede tener menos de 3 caracteres");
  //       event.preventDefault();
  //     }
  //
  //
  // }

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
   alert("El campo nombre esta vacio");
    document.getElementById("name").focus();
    return false;

  }else if(nombre.length>50 || nombre.length<3){
     alert("Los nombres deben contar entre 3 y 50 caracteres");
     // nombre.setCustomValidity("Nombre no puede tener menos de 3 caracteres");
        document.getElementById("name").focus();
    return false;
  }else if(apellido=== ""){
     alert("El campo apellido esta vacio");
        document.getElementById("surname").focus();
    return false;
  }else if(apellido.length>50 || apellido.length<3){
     alert("El apellido deben contar entre 3 y 50 caracteres");
             document.getElementById("surname").focus();
    return false;
  }else if(dni=== ""){
     alert("El campo dni esta vacio");
        document.getElementById("dni").focus();
    return false;
  }else if(dni.length<8 || dni.length>8){
     alert("El dni deben contar 8 caracteres");
             document.getElementById("dni").focus();
    return false;
  }
  else if(domicilio=== ""){
     alert("El campo domicilio esta vacio");
        document.getElementById("address").focus();
    return false;
  }else if(domicilio.length>50 || domicilio.length<5){
     alert("El domicilio deben contar entre 5 y 50 caracteres");
             document.getElementById("address").focus();
    return false;
  }else if(email=== ""){
     alert("El campo email esta vacio");
        document.getElementById("address").focus();
    return false;
  }
  else if(!regexEmail.test(email)){
  alert("Correo formato invalido");
    document.getElementById("email").focus();
  return false;
}else if(telefono=== ""){
     alert("El campo telefono esta vacio");
        document.getElementById("telefono").focus();
    return false;
  }else if(telefono.length<10 || telefono.length>10){
     alert("El telefono deben contener 10 numeros");
             document.getElementById("telefono").focus();
    return false;
  }


  else if(password1=== ""){
     alert("El campo contraseña esta vacio");
            document.getElementById("password").focus();
    return false;
  }else if(email=== "" ){
alert("El campo email esta vacio");
      document.getElementById("email").focus();
return false;
}


  else if(password1.length>40 || password1.length<8){
     alert("La contraseña debe contar entre 8 y 40 caracteres");
       document.getElementById("password").focus();
    return false;
        }else if(password2=== ""){
     alert("Verifique su contraseña");
       document.getElementById("password-confirm").focus();
    return false;
        }


    if(password1 === password2){
        }else{
            alert("Las contraseñas no coinciden");
              document.getElementById("password-confirm").focus();
    return false;
            }

    }

// }
