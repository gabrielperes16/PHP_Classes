
<?php
   $aniversario=isset($_GET['number'])?$_GET['number']:'valor nao inserido';
   $data=date("Y");
   $idade=$data-$aniversario;
   echo "Voce tem apenas $idade anos de idade <br>";
   if($idade < 18){
      if($idade == 16 || 17){
         echo "Seu voto é opcional por ter apenas $idade <br>";
      }
   }
   else{
      echo "Acima da idade nescessario pode votar<br>";
   }
   if($idade > 18){
      echo "Com $idade ja se pode dirigir<br>";
   }
   else{
      echo "Com $idade não se pode dirigir<br>";
   }
?>