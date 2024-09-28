<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
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
   $number1=isset($_GET['number1'])?$_GET['number1']:0;

   $escolha=$_GET['escolha'];
   echo "O operador escolhido foi $escolha <br><br>";
   if($escolha == 'dobrar'){
      $dobrar=$number1*2;
      echo"o dobro de $number1 == $dobrar";
   }
   elseif($escolha=='Raiz cubica'){
      $cubica=pow($number1, 1/3);
      echo "A raiz cubica de $number1 é igual a ".number_format($cubica,3);
   }
?>
</div>
<br>
<a href="aula3.html" class="voltar">Voltar</a>