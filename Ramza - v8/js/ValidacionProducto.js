function validarproducto()
{
	var EnteroTam, EnteroCant, EnteroPrec, TextoNom, TextoCol, TextoMod, TextoDesc, Fecha, ERentero, ERtexto, ERfecha, bandera=1;

	TextoNom = document.getElementById("Nombre").value;
	TextoCol = document.getElementById("Color").value;
	EnteroTam = document.getElementById("Tamaño").value;
	TextoTip = document.getElementById("Tipo").value;
	TextoMod = document.getElementById("Modelo").value;
	EnteroCant = document.getElementById("Cantidad_Disponible").value;
	TextoDesc = document.getElementById("Descripcion").value;
	EnteroPrec = document.getElementById("Precio").value;


	ERentero = /^[0-9]+$/;
	ERtexto = /\w/;
	ERfecha = /^[0-9][0-9][0-9][0-9]-[0-9][0-9]-[0-9][0-9]$/;

	if(EnteroTam=="" || EnteroCant=="" || EnteroPrec=="" || TextoNom=="" || TextoTip=="" || TextoCol=="" || TextoMod=="" || TextoDesc=="")
	{
		alert("Es necesario llenar todos los campos.");
		bandera=0;
		
	}

	else if(!ERentero.test(EnteroTam))
	{
		alert("En el campo Entero, solo se pueden ingresar numeros enteros.");
		bandera=0;		
	}

	else if(!ERentero.test(EnteroPrec))
	{
		alert("En el campo Entero, solo se pueden ingresar numeros enteros.");
		bandera=0;		
	}
	
	else if(!ERentero.test(EnteroCant))
	{
		alert("En el campo Entero, solo se pueden ingresar numeros enteros.");
		bandera=0;		
	}

	else if(!ERtexto.test(TextoNom && TextoTip &&TextoCol && TextoMod && TextoDesc))
	{
		alert("En el campo Texto, solo se puede ingresar texto.");
		bandera=0;
	}


	else if(bandera==1)
	{
		alert("Los datos fueron ingresados correctamente.");
		CapturaProductos();
	}


	
}