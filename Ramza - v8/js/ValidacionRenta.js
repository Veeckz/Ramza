function validarRenta()
{
	var Entero, Texto, Fecha, Fecha2, Fecha3, ERentero, ERtexto, ERfecha, bandera=1;
   
	
	Entero = document.getElementById("Total").value;
	Fecha = document.getElementById("Fecha_Inicial_De_Apartado").value;
    Fecha2 = document.getElementById("Fecha_De_Entrega").value;
    Fecha3 = document.getElementById("Fecha_Recuperacion").value;

	ERentero = /^[0-9]+$/;
	ERtexto = /\w/;
	ERfecha = /^[0-9][0-9][0-9][0-9]-[0-9][0-9]-[0-9][0-9]$/;
    
     
    

	if(Entero=="" || Texto=="" || Fecha==""|| Fecha2==""|| Fecha3=="")
	{
		alert("Es necesario llenar todos los campos.");
		bandera=0;
		
	}

	else if(!ERentero.test(Entero))
	{
		alert("En el campo Entero, solo se pueden ingresar numeros enteros.");
		bandera=0;		
	}

	
	else if(!ERtexto.test(Texto))
	{
		alert("En el campo Texto, solo se puede ingresar texto.");
		bandera=0;
	}

	else if(!ERfecha.test(Fecha))
	{

		alert("Es necesario ingresar la Fecha con el formato correcto.");
		bandera=0;
	}
	else if(!ERfecha.test(Fecha2))
	{

		alert("Es necesario ingresar la Fecha con el formato correcto.");
		bandera=0;
	}
	else if(!ERfecha.test(Fecha3))
	{

		alert("Es necesario ingresar la Fecha con el formato correcto.");
		bandera=0;
	}

	else if(bandera==1)
	{
		alert("Los datos fueron ingresados correctamente.");
		CapturaRentas();
	}


	
}