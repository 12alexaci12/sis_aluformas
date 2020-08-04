"use strict"

function validar(){
	var direccion 		= document.formu.direccion.value;
	var nombre 	= document.formu.nombre.value;
	var telefono	= document.formu.telefono.value;
	var url	= document.formu.url.value;

    if (direccion == ""){
	      alert("Por favor ingrese el numero de direccion");
	      document.formu.ci.focus();
	      return;
         }

        if ((!v1.test(nombre)) || (nombre == "")) {
            alert("El nombre es incorrecto o el campo esta vacio");
            document.formu.nombre.focus();
            return;
        }
        if (telefono == "") {
    	   alert("Por favor introduzca un telefono");
    	   document.formu.ap.focus();
    	   return;
        }
	   if (url == "") {
    	   alert("Por favor introduzca una URL");
    	   document.formu.url.focus();
    	   return;
        }

         document.formu.submit();
}
