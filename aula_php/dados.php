<?php
    $nome=$_GET["nome"];
    $ano=$_GET["ano"];
    $sexo=$_GET["sexo"];
    $idade=date("Y") - $ano;
    echo "$nome tem $idade anos de idade"
    
?>
<h1><br></h1>
<a href="form.html">voltar</a>