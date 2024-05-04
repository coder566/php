<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    if($operation == "Сложить") {
        $result = $num1 + $num2;
    }elseif ($operation == "Умножить") {
        $result = $num1 * $num2;
    }

    echo "Результат: $result";
}
?>