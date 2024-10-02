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

<?php
$verificar=isset($_GET['num'])?$_GET['num']:1;
$multiplica=10;
while($multiplica>=0){
   $conta=$verificar*$multiplica;
   echo"$verificar x $multiplica = $conta <br>";
   $multiplica--;
}

  

?>
</div>
<br>
<a href="aula9.html" class="voltar">Voltar</a>