<?php
 $a=isset($_GET['a'])?$_GET['a']:null;
 $b=isset($_GET['b'])?$_GET['a']:null;
 if($a>$b){
    echo"$a,$b";
 }
 else{
    echo $b,$a;
 }
?>