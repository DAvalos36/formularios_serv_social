<?php
  
  $nombre = filter_input(INPUT_POST, 'nombre');
  $noControl = filter_input(INPUT_POST, 'noControl');
  $domicilio = filter_input(INPUT_POST, 'domicilio');
  $telefono = filter_input(INPUT_POST, 'telefono');
  $carrera = filter_input(INPUT_POST, 'carrera');
  $semestre = filter_input(INPUT_POST, 'semestre');
  $dependencia = filter_input(INPUT_POST, 'dependencia');
  $domicilioDep = filter_input(INPUT_POST, 'domicilioDep');
  $respPrograma = filter_input(INPUT_POST, 'respPrograma');
  $fechaInicio = filter_input(INPUT_POST, 'fechaInicio');
  $fechaTerminacion = filter_input(INPUT_POST, 'fechaTerminacion');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="main">
    <div class="header">
      <img src="logo-sep.png" alt="" width="300px">
      <div id="Derecho">
        <h3>TECNOLÓGICO NACIONAL DE MÉXICO</h6>
        <h4>Instituto Tecnológico de Parral</h6>
      </div>
    </div>
    <h6>DEPARTAMENTO DE GESTIÓN TECNOLOGICA Y VINCULACIÓN </h6>
    <h6> SOLICITUD DE SERVICIO SOCIAL </h6>
    <h4> CARTA COMPROMISO DE SERVICIO SOCIAL </h4>
    <p>CON EL FIN DE DAR CUMPLIMIENTO A LO ESTABLECIDO EN EL REGLAMENTO DE LA LEY REGLAMENTARIA DEL ARTICULO 
      5° CONSTITUCIONAL RELATIVO AL EJERCICIO DE LAS PROFESIONES
    </p>
    <div class="renglon">
      <strong>Nombre:</strong>
      <?php echo $nombre; ?>
      <strong>N°Control:</strong>
      <?php echo $noControl; ?>
    </div>
    <div class="renglon">
      <strong>Docmicilio:</strong>
      <?php echo $domicilio; ?>
      <strong>Teléfono:</strong>
      <?php echo $telefono; ?>
    </div>
    <div class="renglon">
      <strong>Carrera:</strong>
      <?php echo $carrera; ?>
      <strong>Semestre::</strong>
      <?php echo $semestre ?>°
    </div>
    <div class="renglon">
      <strong>Dependencia:</strong>
      <?php echo $dependencia; ?>
    </div>
    <div class="renglon">
      <strong>DOMICILIO DE LA DEPENDENCIA:</strong>
      <?php echo $domicilioDep; ?>
    </div>
    <div class="renglon">
      <strong>RESPONSABLE DEL PROGRAMA:</strong>
      <?php echo $respPrograma; ?>
    </div>
    <div class="renglon">
      <strong>FECHA DE INICIO:</strong>
      <?php echo $fechaInicio; ?>
      <strong>FECHA DE TERMINACION:</strong>
      <?php echo $fechaTerminacion; ?>
    </div>
    <p>ME COMPROMETO A REALIZAR EL SERVICIO SOCIAL ACATANDO EL REGLAMENTO DEL SISTEMA NACIONAL DE EDUCACIÓN 
      SUPERIOR TECNOLÓGICA Y LLEVARLO A CABO EN EL LUGAR Y PERIODOS MANIFESTADOS, ASÍ COMO A PARTICIPAR CON MIS 
      CONOCIMIENTOS E INICIATIVA EN LAS ACTIVIDADES QUE DESEMPEÑE, PROCURANDO DAR UNA IMAGEN POSITIVA DEL INSTITUTO 
      TECNOLÓGICO EN EL ORGANISMO O DEPENDENCIA OFICIAL, DE NO HACERLO ASÍ QUEDO ENTERADO (A) DE LA CANCELACIÓN 
      RESPECTIVA, LA CUAL PROCEDERÁ AUTOMÁTICAMENTE.
    </p>
    <div class="renglon">
      EN HIDALGO DEL PARRAL CHIH.
      DEL DÍA
      fecha aqui
      DEL MES DE
      mes aqui
      DEL AÑO
      año aqui
    </div>
    
  
  
  
    </div>
</body>
</html>