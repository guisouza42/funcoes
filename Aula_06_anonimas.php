
<?php

$soma = function ($a, $b) 
{
    return $a + $b;
};

echo $soma(4, 5) . "<br>";


echo "<br>";


function efetuar ($a, $b, $op, $funcao) 
{
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado <br>";
}

efetuar (5, 7, '+', $soma);


echo "<br>";


$multiplicacao = function($a, $b) 
{
    return $a * $b;
};

efetuar (4, 8, '*', $multiplicacao);

