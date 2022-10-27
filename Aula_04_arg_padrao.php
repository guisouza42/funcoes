
<?php
function inicio($nome = "Senhor ", $sobrenome = "Cliente") 
{
    return "Bem vindo, $nome $sobrenome!<br>";
}

echo inicio();
echo inicio(null);
echo inicio(null, null);
echo inicio("Prezado ", "Senhor");

echo "<br>";

function pedido($comida, $bebida = "Suco") 
{
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

pedido("Calzone");

//pedido("Pizza", "Refrigerante");

echo "<br>";

function pedido2($bebida = "Água", $comida) {
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}


pedido2("Refrigerante2", "Pizza2");