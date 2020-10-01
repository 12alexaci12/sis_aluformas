"use strict"

function validar(){
	var tipo_perfil 	= document.formu.tipo_perfil.value;
	var color 		= document.formu.color.value;
	var linea_perfil	= document.formu.linea_perfil.value;
	var largo			= document.formu.largo.value;
	var precio		= document.formu.precio.value;

	if (tipo_perfil == ""){
		alert("Por favor seleccione el tipo de perfil");
		document.formu.tipo_perfil.focus();
		return;
	}

	if (color == ""){
		alert("Por favor seleccione el color");
		document.formu.color.focus();
		return;
	}

	if (linea_perfil == ""){
		alert("Por favor seleccione la linea de perfil");
		document.formu.linea_perfil.focus();
		return;
	}

	if (largo == "") {
		alert("ingrese el largo del perfil");
		document.formu.largo.focus();
		return;
   	}
   	if (precio == "") {
		alert("ingrese el precio del perfil");
		document.formu.precio.focus();
		return;
   	}

		document.formu.submit();
}
