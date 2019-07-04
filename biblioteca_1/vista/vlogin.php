<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ingreso al Sistema</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>
  </head>
  <body>

 <div class="container">
	<div class="row login_box">
	    <div class="col-md-12 col-xs-12" align="center">
            <div class="line"><h3>12 : 30 AM</h3></div>
            <div class="outter"><img src="imagenes/ojo.jpg" class="image-circle"/></div>   
            <h1>Hi Guest</h1>
            <span><?php echo $mensaje?></span>
	    </div>
        <div class="col-md-6 col-xs-6 follow line" align="center">
            <h3>
                 125651 <br/> <span>FOLLOWERS</span>
            </h3>
        </div>
        <div class="col-md-6 col-xs-6 follow line" align="center">
            <h3>
                 125651 <br/> <span>FOLLOWERS</span>
            </h3>
        </div>
        
        <div class="col-md-12 col-xs-12 login_control">
            <form method="post" action="cpuerta.php"> 
                <div class="control">
                    <div class="label">Usuario</div>
                    <input type="text" class="form-control" name="usuario" required="true"/>
                </div>
                
                <div class="control">
                     <div class="label">Password</div>
                     <input type="password" class="form-control" name="pass" required="true"/>
                </div>
                <div align="center">
                    <button type="submit" class="btn btn-orange">INGRESAR</button>
                </div>
            </form>   
        </div>
        
        
            
    </div>
</div>
		

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>