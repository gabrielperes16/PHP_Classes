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
   $dia=isset($_GET['semana'])?$_GET['semana']:'Nao escolhido';
   switch($dia){
      case 1:
      case 2:
      case 3:
      case 4:
      case 5:
         echo"Hoje Tem aula Você pode ir a escola";
         break;
      case 6:
      case 7:
         echo"Hoje Não tem aula você não pode ir a escola!";
         break;
      
   }
   
?>
</div>
<br>
<a href="aula4.html" class="voltar">Voltar</a>