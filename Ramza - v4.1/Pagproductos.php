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
                        <a href="registros.html" class="btn btn-primary" id="menu-toggle">REGRESAR</a>

                    </div>
                </div>
            </div>
        </div>
 
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <div id="RspProductos" class="row">
            

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
                
                <form role="form" method="post" action="registro4.php">
     
                    <div class="col-md-6 col-xs-12 text-left">
                        <input type="text" class="form-control" id="ID_Producto" placeholder="ID_Producto">
                    </div>
                    <div class="col-md-6 col-xs-12 text-left">
                        <input type="text" class="form-control" id="Nombre" placeholder="Nombre">
                    </div>
                    <div class="col-md-6 col-xs-12 text-left">
                        <input type="text" class="form-control" id="Color" placeholder="Color">
                    </div>
                    
                    <div class="col-md-6 col-xs-12 text-left">
                        <input type="text" class="form-control" id="Tamaño" placeholder="Tamaño">
                    </div>
                    <div class="col-md-6 col-xs-12 text-left">
                        <input type="text" class="form-control" id="Tipo" placeholder="Tipo">
                    </div>
                    <div class="col-md-6 col-xs-12 text-left">
                        <input type="text" class="form-control" id="Modelo" placeholder="Modelo">
                    </div>
                <div class="col-md-6 col-xs-12 text-left">
                        <input type="text" class="form-control" id="Cantidad_Disponible" placeholder="Cantidad Disponible">
                    </div>
                    <div class="col-md-6 col-xs-12 text-left">
                        <input type="text" class="form-control" id="Descripcion" placeholder="Descripción">
                    </div>
                    <div class="col-md-6 col-xs-12 text-left">
                        <input type="text" class="form-control" id="Precio" placeholder="Precio">
                    </div>
                     <!--<a href="#" class="btn-block"> <center>Registrar</center></a>-->

                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span>Guardar</button>
                </form>
            </div>
        </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<div id="map3" style="margin-left: 500px; margin-top: 450px; margin-bottom: 100px; border-radius: 150px;" >
</div>