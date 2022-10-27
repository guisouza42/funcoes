
<?php
function Mensagem() 
{
    return "Boa noite!";
}

Mensagem();
$m = Mensagem();
echo $m;
echo "<br>", Mensagem();
echo "<br>";

echo "<br>";

function MensagemNome($nome) 
{
    return "Bem vindo, {$nome}!";
}

echo "<br>", MensagemNome("Guilherme");
echo "<br>", MensagemNome("Braian");

echo "<br>";

function soma($a, $b) 
{
    return $a + $b;
    
}

$x = 7;
$y = 3;
echo "<br>", soma(30, 15);
echo "<br>", soma($x, $y);

