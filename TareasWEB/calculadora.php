<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = intval(htmlspecialchars($_POST["num1"]));
    $num2 = isset($_POST["num2"]) ? intval(htmlspecialchars($_POST["num2"])) : null;
    $operacion = htmlspecialchars($_POST["operacion"]);

    if ($operacion == "+") {
        $resultado = $num1 + $num2;
        echo "<h1>El resultado de la suma es $resultado</h1>";
    }
    elseif ($operacion == "-") {
        $resultado = $num1 - $num2;
        echo "<h1>El resultado de la resta es $resultado</h1>";
    }
    elseif ($operacion == "*") {
        $resultado = $num1 * $num2;
        echo "<h1>El resultado de la multiplicación es $resultado</h1>";
    }
    elseif ($operacion == "/") {
        if ($num2 != 0) {
            $resultado = $num1 / $num2;
            echo "<h1>El resultado de la división es $resultado</h1>";
        } else {
            echo "<h1>No se puede dividir entre cero</h1>";
        }
    }
    elseif ($operacion == "^2") {
        $resultado = $num1 ** 2;
        echo "<h1>El resultado de elevar $num1 al cuadrado es $resultado</h1>";
    }
    elseif ($operacion == "sqrt") {
        if ($num1 >= 0) {
            $resultado = sqrt($num1);
            echo "<h1>El resultado de la raíz cuadrada de $num1 es $resultado</h1>";
        } else {
            echo "<h1>No se puede calcular la raíz cuadrada de un número negativo</h1>";
        }
    }
    else {
        echo "<h1>Operación no reconocida</h1>";
    }
} else {
    echo "<h1>No se encontraron los datos</h1>";
}

?>
