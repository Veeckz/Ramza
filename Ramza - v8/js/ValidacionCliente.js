function validarcliente()
{
	var EnteroNum, TextoNom, TextoApe, TextoDir, TextoRFC, Fecha, ERentero, ERtexto, ERfecha, bandera=1;

	TextoNom = document.getElementById("Nombre").value;
	TextoApe = document.getElementById("Apellidos").value;
	EnteroNum = document.getElementById("NumTel").value;
	TextoDir = document.getElementById("Direccion").value;
	TextoRFC = document.getElementById("RFC").value;


	ERentero = /^[0-9]+$/;
	ERtexto = /\w/;
	ERfecha = /^[0-9][0-9][0-9][0-9]-[0-9][0-9]-[0-9][0-9]$/;

	if(EnteroNum=="" || TextoNom=="" || TextoApe=="" || TextoDir=="" || TextoRFC=="")
	{
		alert("Es necesario llenar todos los campos.");
		bandera=0;
		
	}

	else if(!ERentero.test(EnteroNum))
	{
		alert("En el campo Entero, solo se pueden ingresar numeros enteros.");
		bandera=0;		
	}

	
	else if(!ERtexto.test(TextoNom && TextoApe && TextoDir && TextoRFC))
	{
		alert("En el campo Texto, solo se puede ingresar texto.");
		bandera=0;
	}

	else if(bandera==1)
	{
		alert("Los datos fueron ingresados correctamente.");
		CapturaCliente();
	}


	
}