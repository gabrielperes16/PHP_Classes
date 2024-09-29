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
   $num = isset($_GET['num']) ? $_GET['num'] : 0; // Remova o cifrão extra na chave 'num'
   echo "O numero selecionado foi $num Ate o valor 0 <br>";
   while ($num != 0) { // Altere a condição para $num < 15
      echo "$num ";
      $num -= 2;
   }
?>

</div>
<br>
<a href="aula6.html" class="voltar">Voltar</a>