<?php

echo "<h1>Hello World!</h1>";

?>

<?php
     //Declarando um array vazio
    $carros = array();

    //Primeira forma de declaração e atribuição de valores
    $carros = array("Fusca", "Monza", "Passat");

    //Segunda forma de declaração e atribuição de valores
    //Esta forma é semelhante à anterior, mas utilizando sintaxe similar a do Javascript
    $carros = ["Fusca", "Monza", "Passat"];

    //Terceira forma de declaração e atribuição de valores
    $carros[0] = "Fusca";
    $carros[1] = "Monza";
    $carros[2] = "Passat";

    //Quarta forma de declaração e atribuição de valores
    $carros[] = "Fusca";
    $carros[] = "Monza";
    $carros[] = "Passat";

    print_r($carros);

?>

<?php
    $num1 = 10;
    $num2 = 15;

    $num3 = soma($num1, $num2);
    imprimir_resultado($num3);


function soma($numero1, $numero2)
{
     return $numero1 + $numero2;
}
function imprimir_resultado($numero)
{
     echo "O resultado da operação é igual a: " . $numero;
}
