<html>

<body>

<H1> FUNÇÕES E SUBTRAÇÕES </H1>

<?php

function sub_valores ($valor1 , $valor2)
{
    $sub = $valor1 - $valor2;
    echo "A soma dos valores " . $valor1 . " e " . $valor2;
    print "<br>";
    echo "Resulta em: " . $sub;

}

$n1 = 10;
$n2 = 20;

sub_valores ($n1,$n2);

?>
<br>
<a href="funcoes.php">PROXIMO</a>

<br>
<a href="triplo.php">Função de Triplo</a>
<br>
<a href="funvet.php">Função de Vetor</a>

</body>


</html>