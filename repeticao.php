<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetição</title>
</head>
<body>
    <h1>Repetição</h1>

<?php
//array
$clientes = ["Vagner","Marcus","Hygor","Julia","Letícia","Davi","Higor","Melyssa","Ayslaine","Vinícius"];
$contador = 0;
while($contador <= 9){
echo "$clientes[$contador]<br>";
$contador = $contador + 1;
} 
echo "<br><br>";

// Tabuada 8

$valor = 8;
$contador = 1;
while($contador <= 10){
    $total = $valor * $contador;
    echo "$valor X $contador = $total";
    $contador = $contador + 1;
    echo "<br>";
}


?>
</body>
</html>
