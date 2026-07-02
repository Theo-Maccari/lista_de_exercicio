<?php

function inverterTexto(){

$frase = "Inverter string PHP";
$palavras = explode(" ", $frase);
$fraseInvertida = implode(" ", array_reverse($palavras));

echo $fraseInvertida;

}

?>