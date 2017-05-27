function CapturaProductos()
{
	var url= "Conexion.php";
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
		$("#Respuesta").html(data);
	}); 

}

