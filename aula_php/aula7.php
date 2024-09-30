<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>test</title>
</head>
<body>
   <style>
      body{
         background-color: beige;
      }
      .atividade{
         text-align: center;
         font-size: 40px;
         margin-top: 100px;
         font-weight: 700;
      }
      .voltar{
         color: purple;
         font-size: 20px;
         text-align: left;
      }
   </style>
</body>
</html>
<div class="atividade">

<form method="get" action="aula7.php">
<?php
   $cont=1;
   while($cont <=5){
      echo"$cont- <input type=\"number\" name=\"num$cont\"> <br>";
      $cont++;
   }
?>
<input type="submit" value="Resultado">
</form>

</div>
<br>
<a href="aula7.html" class="voltar">Voltar</a>