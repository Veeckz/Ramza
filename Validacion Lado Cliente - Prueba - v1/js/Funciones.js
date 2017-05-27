function registro()
{
	var url= "Conexion.php";
	$.post(url, 
				{
				Entero:$("#Entero").val(),
				Texto:$("#Texto").val(),
				Fecha: $("#Fecha").val()
				},
	function(data)
	{
		//Obtener respuesta de la pagina "Respuesta_Registro_Alumnos"
		$("#Respuesta").html(data);
	}); 

}

