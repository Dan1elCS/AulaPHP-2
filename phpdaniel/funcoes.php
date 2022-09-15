<html>

<body>

<H1> FUNÇÕES E SOMA </H1>

<?php

function somandovalores ($valor1 , $valor2)
{
    $soma = $valor1 + $valor2;
    echo "A soma dos valores " . $valor1 . " e " . $valor2;
    print "<br>";
    echo "Resulta em: " . $soma;

}

$n1 = 10;
$n2 = 20;

somandovalores ($n1,$n2);

?>
<br>
<a href="fundiv.php">PROXIMO</a>
<br>
<a href="triplo.php">Função de Triplo</a>
<br>
<a href="funvet.php">Função de Vetor</a>


</body>


</html>