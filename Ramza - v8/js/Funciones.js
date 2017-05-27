function CapturaProductos()
{
	var url= "productos.php";
	$.post(url, 
				{
				ID_Producto:$("#ID_Producto").val(),
				Nombre:$("#Nombre").val(),
				Color: $("#Color").val(),
				Tamaño: $("#Tamaño").val(),
				Tipo: $("#Tipo").val(),
				Modelo: $("#Modelo").val(),
				Cantidad_Disponible:$("#Cantidad_Disponible").val(),
				Descripcion:$("#Descripcion").val(),
				Precio:$("#Precio").val()
				},
	function(data)
	{
		//Obtener respuesta de la pagina "Respuesta_Registro_Alumnos"
		$("#RspProductos").html(data);
	}); 

}


function CapturaRentas()
{
	var url= "Rentas.php";
	$.post(url, 
				{
                ID_Cliente:$("#ID_Cliente").val(),
				Fecha_Inicial_De_Apartado: $("#Fecha_Inicial_De_Apartado").val(),
				Fecha_De_Entrega: $("#Fecha_De_Entrega").val(),
				Fecha_Recuperacion: $("#Fecha_Recuperacion").val(),
				Total: $("#Total").val()
				},
	function(data)
	{
		//Obtener respuesta de la pagina "Respuesta_Registro_Alumnos"
		$("#RspRentas").html(data);
	}); 

}

function CapturaCliente()
{
	var url= "Cliente.php";
	$.post(url, 
				{
				ID_Cliente:$("#ID_Cliente").val(),
				Nombre:$("#Nombre").val(),
				Apellidos: $("#Apellidos").val(),
				NumTel: $("#NumTel").val(),
				Direccion: $("#Direccion").val(),
				RFC: $("#RFC").val()
				},
	function(data)
	{
		//Obtener respuesta de la pagina "Respuesta_Registro_Alumnos"
		$("#RspCliente").html(data);
	}); 

}

function CapturaPago()
{
	var url= "Pago.php";
	$.post(url, 
				{
				ID_Pago:$("#ID_Pago").val(),
				ID_Renta:$("#ID_Renta").val(),
				FechaPago: $("#FechaPago").val(),
				Abono: $("#Abono").val(),
				Observaciones: $("#Observaciones").val()
				},
	function(data)
	{
		//Obtener respuesta de la pagina "Respuesta_Registro_Alumnos"
		$("#RspPago").html(data);
	}); 

}

