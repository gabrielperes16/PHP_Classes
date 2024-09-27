
<?php
   $nota1=isset($_GET['nota1'])?$_GET['nota1']:1;
   $nota2=isset($_GET['nota2'])?$_GET['nota2']:1;
   $media=($nota1+$nota2)/2;
   echo "A media entre a nota $nota1 e $nota2 é igual a $media<br>";
   if($media < 5){
      echo "O aluno esta reprovado";
   }
   elseif ($media >= 5 && $media <= 7) {
      echo "O aluno está em recuperação";
   }
   else{
      echo "aluno aprovado!";
   }
?>