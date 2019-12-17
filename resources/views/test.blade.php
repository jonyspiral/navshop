<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">
html,body {



  }
  .contenedorMaster{

    display:flex;
    flex-direction: column;
    min-height:100%;
height: 600px;
  }


  .contenedor {
    height: 33%;
    display:flex;
    flex-direction: row;
    min-height:100%;
  }

  .contenedor > div {


    flex:1;
    display:flex;
  }
.borde{
  border-color: black;
  border: solid;
}
  /* .fila0 { background:rgba(0,0,0,0.3); }
  .fila1 { background:rgba(255,0,0,0.3); }
  .fila2 { background-color:red; }
/* .fila2 { background: red; } */
</style>

  </head>
  <body>
  <div class="contenedorMaster">
    <div class="contenedor borde">1</div>
    <div class="contenedor borde">2</div>
    <div class="contenedor borde">
        <div class="contenedor">
          <div class="fila0 borde">A</div>
          <div class="fila1 borde">B</div>
          <div class="fila2 borde">C</div>
          <div class="fila2 borde">C</div>
        </div>
      </div>
    </div>
  </body>
</html>
