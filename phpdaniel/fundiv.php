<html>

<body>

<H1> FUNÇÕES E DIVISÃO </H1>

<?php

function div_valores ($valor1 , $valor2)
{
    $div = $valor1 / $valor2;
    echo "A dividindo os valores " . $valor1 . " e " . $valor2;
    print "<br>";
    echo "Resulta em: " . $div;

}

$n1 = 10;
$n2 = 20;

div_valores ($n1,$n2);

?>
<br>
<a href="funmulti.php">PROXIMO</a>

<br>
<a href="triplo.php">Função de Triplo</a>
<br>
<a href="funvet.php">Função de Vetor</a>

</body>


</html>