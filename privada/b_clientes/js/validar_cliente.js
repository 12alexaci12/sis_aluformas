"use strict"

function validar(){
	var direccion 	= document.formu.direccion.value;
	var nombre 	= document.formu.nombre.value;
	var ap		= document.formu.ap.value;
	var am		= document.formu.am.value;
	var ci		= document.formu.ci.value;
	var telefono	= document.formu.telefono.value;

	if ((!v1.test(nombre)) || (nombre == "")) {
	    alert("El nombre es incorrecto");
	    document.formu.nombre.focus();
	    return;
	}

	if ((!v1.test(ap)) || (ap == "")) {
	    alert("El apellido paterno es incorrecto");
	    document.formu.ap.focus();
	    return;
	}

	if ((!v1.test(am)) || (am == "")) {
	    alert("El apellido materno es incorrecto");
	    document.formu.am.focus();
	    return;
	}

	if (direccion == ""){
	      alert("Por favor ingrese el numero de direccion");
	      document.formu.ci.focus();
	      return;
	    }
	if (telefono == "") {
	   alert("Por favor introduzca un telefono");
	   document.formu.ap.focus();
	   return;
	}

         document.formu.submit();
}
