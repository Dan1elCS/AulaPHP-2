<html>

<body>

<H1> FUNÇÕES E MUTIPLICAÇÃO </H1>

<?php

function mult_valores ($valor1 , $valor2)
{
    $mult = $valor1 * $valor2;
    echo "A mulplicando os valores " . $valor1 . " e " . $valor2;
    print "<br>";
    echo "Resulta em: " . $mult;

}

$n1 = 10;
$n2 = 20;

mult_valores ($n1,$n2);

?>
<br>
<a href="funsub.php">PROXIMO</a>

<br>
<a href="triplo.php">Função de Triplo</a>
<br>
<a href="funvet.php">Função de Vetor</a>


</body>


</html>