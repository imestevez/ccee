  
  function validarDni(dni){
    var numero;  //Almacena el numero del DNI
    var aux_letra; // almacena la letra del DNI
    var letra; //Almacena el conjunto de letras válidas de los DNIs
    var expr_dni; //Expresión válida de un DNI -> 8 dígitos y 1 letra


    expr_dni = /^[0-9]{8}[a-zA-Z]$/; //8 digitos y 1 letra
   
    if(expr_dni.test(dni.value) == true) //Si el dni cumple la expresión regular
    {  
      numero = dni.value.substring(0,dni.value.length - 1); // se coge el número del DNI
      aux_letra = dni.value.substring(dni.value.length - 1); //se coge la letra del DNI
      numero = numero % 23; // se hace múdulo 23 del número del DNI para saber que letra le corresponde
      letra='TRWAGMYFPDXBNJZSQVHLCKET'; //Todas las letras posibles de los DNIs
      letra=letra.substring(numero,numero+1);//Coge la letra que le corresponde al DNI 
        
      if (letra!=aux_letra.toUpperCase()) //Si las letras no coinciden
      {
          document.getElementById("dni").innerHTML = "NIF incorrecto"; 
          return false;
      }else //Si la letra insertada coincide con la correspondiente al número de dni
        {
          document.getElementById("dni").innerHTML = ""; //lanza un mensaje por pantalla indicando que el campo está vacío

          return true;
        }
     }
      else //Si dni no cumple la expresión regular
      {
          document.getElementById("dni").innerHTML = "NIF incorrecto"; 
          return false;
  }   
} 

function validar(formulario){

    var form;// almacena el formulario que se pase por parámetro del HMTL
    form =  document.forms[formulario];

    var alerta = false;

    if(validarDni(form.dni)){
        return true;
    }else{
      alert('NIF incorrecto');
      return false;
    }

}