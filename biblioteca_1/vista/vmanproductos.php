<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ingreso al Sistema</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>
  </head>
  <body>

	<div class="container">
    <div class="row">
       <?php require 'menu.php';?>
        <div class="col-sm-9 col-md-9">
            <div class="well">
                <h1>
                    Discos</h1>
                <form class="form-horizontal" action="cgrabaproducto.php" method="post" enctype="multipart/form-data">
                    <fieldset>

                    <!-- Form Name -->
                    <legend>Ingreso Discos</legend>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">idDisco</label>  
                      <div class="col-md-4">
                          <input required="true" id="codproducto" name="idDisco" type="text" placeholder="album" class="form-control input-md">
                      <span class="help-block">Ingresar letras y números</span>  
                      </div>
                    </div>
 <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Titulo</label>  
                      <div class="col-md-4">
                          <input required="true" id="nombre" name="titulo" type="text" placeholder="Amar es compartir" class="form-control input-md">
                      <span class="help-block">Nombre Corto del disco</span>  
                      </div>
                    </div>
                    <!-- Textarea -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textarea">Autor</label>
                      <div class="col-md-4">                     
                        <textarea class="form-control" id="descripcion" name="bibliografia del autor"></textarea>
                      </div>
                    </div>

                   

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Genero</label>  
                      <div class="col-md-4">
                      <input id="costo" name="genero" type="text" placeholder="" class="form-control input-md">
                      <span class="help-block">genero</span>  
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Fecha_Publicacion</label>  
                      <div class="col-md-4">
                      <input id="stock" name="fecha" type="date" placeholder="" class="form-control input-md">
                      <span class="help-block">Fecha_Publicacion</span>  
                      </div>
                    </div>

                    <!-- File Button --> 
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="filebutton">Portada</label>
                      <div class="col-md-4">
                        <input idDisco="imagen" name="portada" class="input-file" type="file">
                      </div>
                    </div>
 <!-- File Button --> 
                    <div class="form-group">
          
                      <div class="col-md-12">
                          <input id="enviar" name="enviar" class="btn btn-success btn-block" type="submit" title="Grabar" value="Grabar" >
                      </div>
                    </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
       <div class="row">
           <div class="col-sm-9 col-md-9">
               <div class="well">
                   <table id="tproductos">
                       <thead>
                           <tr><th>PORTADA</th><th>DISCO</th><th>AUTOR</th><th>GENERO</th><th>FECHA_PUBLICACION</th></tr>
                       </thead>
                       <tbody>
                           <?php foreach($items as $it){?>
                           <tr><td><img width="60" height="40" class="img-responsive" src="data:image/jpeg;base64,<?php echo base64_encode($it['imagen'])?>"></td>
                           <td><?php echo $it["nombre"];?></td>
                           <td><?php echo $it["nombre"];?></td>     
                           <td><?php echo $it["iditems"];?></td>
                            <td><?php echo $it["stock"];?><td>
                           </tr>
                           
                           <?php  }?>
                       </tbody>
                   </table>
               </div>
           </div>
    </div>
            
            <div class="row">
           <div class="col-sm-3 col-md-3">
               <div class="well">
                   <table id="tproductos">
                       <thead>
                           <tr><th>LISTA DE CANCIONES</th></tr>
                       </thead>
                       <tbody>
                           <?php foreach($discos as $it){?>
                            <td><?php echo $it["nombre"];?></td>
                            </tr>
                           
                           <?php  }?>
                       </tbody>
                   </table>
               </div>
           </div>
    </div>

</div>	
      <script src="js/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>

<script>

$(document).ready( function () {
    $('#tproductos').DataTable();
} );
</script>
<!--    <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>-->
  </body>
</html>