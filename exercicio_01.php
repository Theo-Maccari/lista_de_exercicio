<?php

// (x² + y²) / (x+y)

function calcularFormula(5x,5y){

$x = 10;
$y = 5;

echo "Valor de x é: $x <br>";
echo "Valor de Y é: $y <br><br>";

    if($x+$y == 0)
        { return "Não é possível realizar a divisão por zero";
    }

$resultado = (pow($x,2)) + pow($y,2)/($x+$y);

}

?>