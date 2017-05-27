<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrar</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">



  

</head>

<body>

    <div id="wrapper">
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        
                        <a href="" class="btn btn-default" id="menu-toggle">Bienvenido</a>
                        <a href="registro.html" class="btn btn-primary" id="menu-toggle">REGRESAR</a>

                    </div>
                </div>
            </div>
        </div>
 
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <div id="RspRentas" class="row">
			

	</div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    </script>

    <script type="text/javascript">
        function llama()
    {
        $('#'+donde).load(que);
    }
    </script>
 
</body>

</html>


<div style="margin-top: 90px; margin-bottom: 450px; margin-left: 50px;">
	<div class="container">
            
            <div class="col-md-6 col-md-offset-3 wow fadeInUp" data-wow-delay=".3s">
                
                
     
                    <div class="col-md-6 col-xs-12 text-left">
                        <input type="text" class="form-control" id="ID_Renta" placeholder="ID_Renta">
                    </div>
                    <div class="col-md-6 col-xs-12 text-left">
                        <input type="text" class="form-control" id="ID_Cliente" placeholder="ID_Cliente">
                    </div>
                    <div class="col-md-6 col-xs-12 text-left">
                        <input type="text" class="form-control" id="Fecha_Inicial_De_Apartado" placeholder="Fecha inicial de Apartado">
                    </div>
                    
                    <div class="col-md-6 col-xs-12 text-left">
                        <input type="text" class="form-control" id="Fecha_De_Entrega" placeholder="Fecha de Entrega">
                    </div>
                    <div class="col-md-6 col-xs-12 text-left">
                        <input type="text" class="form-control" id="Fecha_Recuperacion" placeholder="Fecha Recuperacion">
                    </div>
                    <div class="col-md-6 col-xs-12 text-left">
                        <input type="text" class="form-control" id="Total" placeholder="Total">
                    </div>
                     <!--<a href="#" class="btn-block"> <center>Registrar</center></a>-->

                    <button type="submit" class="btn btn-success" onclick="CapturaRentas()"><span class="glyphicon glyphicon-save"></span>Guardar</button>
                
            </div>
        </div>
</div>



<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="js/Funciones.js" type="text/javascript"> </script>
<div id="map3" style="margin-left: 500px; margin-top: 450px; margin-bottom: 100px; border-radius: 150px;" >
</div>