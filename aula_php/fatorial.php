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
   $total=1;
   $i=1;
   $valor=isset($_GET['num'])?$_GET['num']:1;
   echo"A fatorial escolhido é do numero $valor <br>";
   if($valor>0){
      for($i=$valor;$i>1; $i--){
      $total*=$i;   
      };
   echo"O Resultado do Fatorial é $total";
      
   }
?>
</div>
<br>
<a href="fatorial.html" class="voltar">Voltar</a>