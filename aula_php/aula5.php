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
   $estado=isset($_GET['estados'])?$_GET['estados']:1;
   switch ($estado) {
      case 1:
      case 2:
      case 3:
      case 4:
      case 5:
      case 6:
      case 7:
          echo "Este estado fica na região Norte!";
          break;
      case 8:
      case 9:
      case 10:
      case 11:
      case 12:
      case 13:
      case 14:
      case 15:
      case 16:
          echo "Este estado fica na região Nordeste!";
          break;
      case 17:
      case 18:
      case 19:
      case 20:
          echo "Este estado fica na região Centro-Oeste!";
          break;
      case 21:
      case 22:
      case 23:
      case 24:
          echo "Este estado fica na região Sudeste!";
          break;
      case 25:
      case 26:
      case 27:
          echo "Este estado fica na região Sul!";
          break;
      default:
          echo "Estado inválido!";
          break;
  }
  ?>
</div>
<br>
<a href="aula5.html" class="voltar">Voltar</a>