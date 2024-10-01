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
   $recebimento=isset($_GET['teste'])?$_GET['teste']:1;
   do{
      echo "$recebimento ";
      $recebimento--;
      
   }while($recebimento >=0);
?>
</div>
<br>
<a href="aula8.html" class="voltar">Voltar</a>