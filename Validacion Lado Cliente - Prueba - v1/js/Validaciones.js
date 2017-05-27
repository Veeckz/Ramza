function validar()
{
	var Entero, Texto, Fecha, ERentero, ERtexto, ERfecha, bandera=1;

	Entero = document.getElementById("Entero").value;
	Texto = document.getElementById("Texto").value;
	Fecha = document.getElementById("Fecha").value;

	ERentero = /^[0-9]+$/;
	ERtexto = /\w/;
	ERfecha = /^[0-9][0-9][0-9][0-9]-[0-9][0-9]-[0-9][0-9]$/;

	if(Entero=="" || Texto=="" || Fecha=="")
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

	else if(bandera==1)
	{
		alert("Los datos fueron ingresados correctamente.");
		registro();
	}


	
}