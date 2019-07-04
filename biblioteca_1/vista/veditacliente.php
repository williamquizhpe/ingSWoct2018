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
                    Canciones</h1>
                <form class="form-horizontal" action="cactualizacliente.php" method="post" enctype="multipart/form-data">
                            <fieldset>

                            <!-- Form Name -->
                            <legend>Edicion de Canciones</legend>

                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="cedula">idDisco</label>  
                              <div class="col-md-4">
                                  <input readonly="true" value="<?php echo $micliente[0]["cedula"]?>" id="cedula" name="cedula" type="text"  class="form-control input-md" required="">
                              <span class="help-block">idDisco</span>  
                              </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="nombre">Pista</label>  
                              <div class="col-md-4">
                              <input value="<?php echo $micliente[0]["nombre"]?>" id="nombre" name="nombre" type="text" placeholder="Nombre Pista" class="form-control input-md" required="">
                              <span class="help-block">Ingrese nombres completos</span>  
                              </div>
                            </div>

                            <!-- Textarea -->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="direccion">Nombre</label>
                              <div class="col-md-4">                     
                                <textarea class="form-control" id="direccion" name="direccion"><?php echo $micliente[0]["direccino"]?></textarea>
                              </div>
                            </div>

                            <!-- Prepended checkbox -->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="telefono">Duracion</label>
                              <div class="col-md-4">
                                <div class="input-group">
                                  <span class="input-group-addon">     
                                      <input type="checkbox" checked="checked">     
                                  </span>
                                  <input value="<?php echo $micliente[0]["telefono"]?>" id="telefono" name="telefono" class="form-control" type="text" placeholder="Ej.: 0988789888">
                                </div>
                                <p class="help-block">Duracion de la pista</p>
                              </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="fechan">Clasificacion</label>  
                              <div class="col-md-4">
                                  <input value="<?php echo substr($micliente[0]["fechaNacimiento"],0,10)?>"  id="fechan" name="fechan" type="text" placeholder="" class="form-control input-md">
                              <span class="help-block">Clasificacion</span>  
                              </div>
                            </div>

                            <!-- File Button --> 
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="foto">Foto</label>
                              <div class="col-md-4">
                                <input id="foto" name="foto" class="input-file" type="file">
                              </div>
                            </div>

                            <!-- Button (Double) -->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="enviar"></label>
                              <div class="col-md-8">
                                  <button id="enviar" name="enviar" class="btn btn-success" type="submit">Actualizar</button>
                                  <button id="limpiar" name="limpiar" class="btn btn-warning" type="reset">Limpiar</button>
                              </div>
                            </div>

                            </fieldset>
                    </form>
                <hr>
                <table id="tclientes">
                    <thead><tr><th>ID</th><th>Nombre</th><th>Foto</th><th>Acciones</th></tr></thead>
                    <tbody>
                        <?php foreach ($clientes as $cli){?>
                        <tr><td><?php echo $cli["cedula"]?></td>
                            <td><?php echo $cli["nombre"]?></td>
                            <td><img width="60" height="70" src="data:image/jpeg;base64,<?php echo base64_encode($cli["foto"])?>"></td>
                            <td><a href="celiminacliente.php?idc=<?php echo $cli["cedula"]?>"><button>Eliminar</button></a>
                            <a href="ceditacliente.php?idc=<?php echo $cli["cedula"]?>"><button>Editar</button></a></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>	
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

<!--    <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>-->
  </body>
</html>