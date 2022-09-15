<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário</title>
</head>
<body>

<?php

$nome = $_POST["nome"];   
$idade = $_POST["idade"];

?>

<p> Oi <?php echo $nome; ?> </p>
<p> Você tem <?php echo $idade; ?> anos </p>

<br>
    <a href="index.html">Home</a>
    
    
</body>
</html>