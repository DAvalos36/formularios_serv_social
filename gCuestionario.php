<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .contenedor {
      padding: 0px 70px 0px 70px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      /* align-items: center; */
    }
    .cabecera {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
    }
    .cabecera .headerDerecha {
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      /* align-items: center; */
    }
    .cabecera .headerDerecha h3, .cabecera .headerDerecha h5 {
      margin: 0px;
      text-align: right;
      color: lightgray;
    }
    .renglon {
      width: 100%;
      display: flex;
      justify-content: space-around;
      /* padding-top: 2px; */
      padding-bottom: 2px;
      border-bottom: 1px solid black;
    }
    h4 {
      margin: 0px;
    }
    p {
      margin-bottom: 0px;
    }
    #derecha {
      display: flex;
      justify-content: flex-end;
      text-align: right;
    }
  </style>
</head>
<body>
  <div class="contenedor">
    <div class="cabecera">
      <div>
        <img src="./Logo-TecNM.png" alt="" width="150">
        <img src="./1200px-SEP_Logo_2019.svg.png" alt="" width="150">
      </div>
      <div class="headerDerecha">
        <h3>Instituo Tecnologico de Parral</h3>
        <h5>Depto. Recursos Humanos</h5>
      </div>
    </div>

    <div id="derecha">
      <h3 >Constancia de Servicios</h3>
    </div>
    <h3>A QUIEN CORRESPONDA:</h3>
    <p>Por medio de la presente hago de su conocimiento que el (la)</p>
    <div class="renglon">
      <h4>NOMBRE AQUI</h4>
    </div>
    <p>CURP Y RFC</p>
    <div class="renglon">
      <h4>CURP AQUI</h4>
      <h4>RFC AQUI</h4>
    </div>
    <p>Labora en el Instituo Tecnologico como:</p>
    <div class="renglon">
      <h4>CATEDRATICO</h4>
    </div>
    <p>Con efectos a partir del dia:</p>
    <div class="renglon">
      <h4>10/01/1994</h4>
    </div>
    <p>Status:</p>
    <div class="renglon">
      <h4>(10) BASE</h4>
    </div>
    <p>Con clave (s):</p>
    <div class="renglon">
      <h4>CLAVE AQUI</h4>
    </div>
    <p>Categoria(s)</p>
    <div class="renglon">
      <h4>PROFESOR TITUTAL -C- (ES)</h4>
    </div>
    <p>Sueldo:</p>
    <div class="renglon">
      <h4>$9999999</h4>
    </div>
    <p>
      Por lo que se extiende la presente constancia de servicios para los fines que el
      interesado juzgue conveniente en Hgo del Parral Chih. FECHA AQUI
    </p>
    <h3 style="margin-bottom: 0px;">DR. EDGAR OMAR GUTIERREZ VILLEGAS</h3>
    <h3 style="margin-top: 0px;">JEFE DE DEPTO. DE RECURSOS HUMANOS</h3>
    <div>
      <img src="./logo-itp.png" width="70px">
      <img src="./logo-itp.png" width="70px">
      <img src="./logo-itp.png" width="70px">
    </div>
  </div>
</body>
</html>