<?php

include('Operaciones.php');
 $total=0;
 if(isset($_GET['n1']))
 {
      $Objeto=new Operaciones();

      $n1=$_GET['n1'];
      $n2=$_GET['n2'];
      $op=$_GET['opcion'];
    if($op=='suma')
   {
    $total=$Objeto-> Suma($n1,$n2);
   }
   else if($op=='resta')
   {
    $total=$Objeto-> Resta($n1,$n2);
   }
   else if($op=='multiplicacion')
   {
    $total=$Objeto-> Multiplicacion($n1,$n2);
   }
   else if($op=='division')
   {
    $total=$Objeto-> Division($n1,$n2);
   }
 }
 
?>
<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body bgcolor="#D3D0DE">

  <div class="container" >
    <h1 align="center"> Proyecto 5to. BACO</h1>

  </div>
  <br><br>

  <form method="get" action="index.php">
    <div class="row">
      <div class="input-field col s6">
        <input name="n1" id="n1" type="number" class="validate">
        <label class="active" for="n1">Primer Valor</label>
      </div>

      <div class="input-field col s6">
        <input name="n2" id="n2" type="number" class="validate">
        <label class="active" for="n2">Segundo Valor</label>
      </div>
    </div>

    <div class="input-field col s6">
      <label>Opciones</label>
      <br>
      <select name="opcion" class="browser-default">
        <option value="suma"> Suma </option>
        <option value="resta">Restas</option>
        <option value="multiplicacion">Multiplicacion</option>
        <option value="division">Division</option>
      </select>
    </div>

    <div class="container">
      <input type="submit" value="Operar" class="waves-effect waves-light btn">

    </div>
   
  </form>
  <?php

    echo '<h2 align= "center" > El resultado es:' .$total. '<h2>';
  ?>

  <form method="get" action="index.php">
  <div class="container">
     <input type="hidden" name="limpiar" value="1">
      <input type="submit" value="Limpiar" class="waves-effect waves-light btn">

    </div>
</form>
  
<script>
     document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });
  </script>

  <!--JavaScript at end of body for optimized loading-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>

