
<?php
   $number1=isset($_GET['number1'])?$_GET['number1']:0;

   $escolha=$_GET['escolha'];
   if($escolha == 'dobrar'){
      $dobrar=$number1*2;
      echo"o dobro de $number1 == $dobrar";
   }
   elseif($escolha=='Raiz cubica'){
      $cubica=pow($number1, 1/3);
      echo "A raiz cubica de $number1 é igual a ".number_format($cubica,3);
   }
?>