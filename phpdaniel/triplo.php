<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Triplo</title>
</head>

<body>

<H1> FUNÇÕES E RETURN </H1>

<?php

function triplo ($numero){

$x = $numero * 3;

return $x;

}

$valor =  5;

echo "O triplo de $valor é" . triplo($valor);


?>

<br>
<a href="index.html">Home</a>
<br>
<a href="funvet.php">Função de Vetor</a>

    
</body>
</html>