"use strict"

function validar(){
	var direccion 		= document.formu.direccion.value;
	var nombre 	= document.formu.nombre.value;
	var telefono	= document.formu.telefono.value;

    if (direccion == ""){
	      alert("Por favor ingrese el numero de ci");
	      document.formu.ci.focus();
	      return;
         }

        if ((!v1.test(nombre)) || (nombre == "")) {
            alert("Los nombre son incorrectos o el campo esta vacio");
            document.formu.nombre.focus();
            return;
        }
        if (telefono == "") {
    	   alert("Por favor introduzca un Apellido");
    	   document.formu.ap.focus();
    	   return;
        }

         document.formu.submit();
}
