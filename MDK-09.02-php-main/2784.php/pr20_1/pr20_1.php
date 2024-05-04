<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем значение числа из формы
    $x = $_POST['number'];

    if ($x > 0) {
        $message = "Число $x - положительное";
    } elseif ($x == 0) {
        $message = "Число $x равно нулю";
    } else {
        $message = "Число $x - отрицательное";
    }
} else {
    
    $message = "Ошибка: Форма не отправлена";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результат проверки числа</title>
</head>
<body>
    <h2>Результат проверки числа</h2>
    <p><?php echo $message; ?></p>
    <a href="index.html">Попробовать еще раз</a>
</body>
</html>







