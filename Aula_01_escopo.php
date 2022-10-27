
<?php
function Mensagens() 
{
    echo "Cruzeiro Série A <br>";
    echo "Galo não tem tri! <br>";
}

Mensagens();
Mensagens();
Mensagens();

echo "<br>";

$variavel = 1;

function trocar() 
{
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocar();
echo "Depois: $variavel <br>";

echo "<br>";

function trocarValor() 
{
    global $variavel;
    $variavel = 5;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocarValor();
echo "Depois: $variavel <br>";