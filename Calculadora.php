<?php

 $n1 = 0;
 $n2 = 0;
 $result = 0;
 $calcSoma = 'somar';

 if (isset ($_POST['calcular'])){
    $n1 = (int) $_POST['n1'];
    $n2 = (int) $_POST['n2'];
    $calcSoma = $_POST['calcular'];

    $result = $n1 + $n2;

    if($calcSoma == "Subtrair"){
      $result = $n1 - $n2;
    }

    if($calcSoma == "Multiplicar"){
        $result = $n1 * $n2;
    }

    if($calcSoma == "Dividir"){
        $result = $n1 / $n2;
    }

 }
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora   </title>
</head>
<body>
    
    <form method = "post">
        primeiro numero<br>
        <input type="number" name="n1" value= <?= $n1 ?> required ><br>
        
        segundo numero <br>
        <input type="number" name="n2" value= <?= $n2 ?> required ><br>

        <input type="submit" value="Somar" name="calcular" > <br>
        <input type="submit" value="Subtrair" name="calcular" > <br>
        <input type="submit" value="Multiplicar" name="calcular" > <br>
        <input type="submit" value="Dividir" name="calcular" > <br>

        <br><br>

        <p> resultado: <?= $result ?> <p>
    </form>
    <br>
    
</body>
</html>