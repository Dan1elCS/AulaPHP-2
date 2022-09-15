<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VETOR</title>
</head>
<body>


<?php

    function capitais () {

        $capitais [] = "Natal";
        $capitais [] = "Belo Horizonte";
        $capitais [] = "Rio de Janeiro";
        $capitais [] = "Goiânia";
        $capitais [] = "São Paulo";

return $capitais;

    }

    $nomes = capitais () ;
    for ($i=0; $i<sizeof ($nomes) ; $i++) {
    echo "\$nomes[$i] vale $nomes[$i] <br>";

    }

?>
    <br>
    <a href="index.html">Home</a>
    <br>
    <a href="funvet.php">Função de Vetor</a>
    <br>
    <a href="metodo.html">FORMULARIO</a>
    

</body>
</html>