<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $тип_рекламы = $_POST['ad_type'];

    
    switch ($тип_рекламы) {
        case 'регулярный клиент':
            $message = "Клиент является регулярным клиентом.";
            break;
        case 'телевизионная реклама':
            $message = "Клиент обратился после телевизионной рекламы.";
            break;
        case 'реклама в лифте':
            $message = "Клиент обратился по рекламе, размещенной в лифте.";
            break;
        case 'устная рекомендация':
            $message = "Клиент обратился по чьей-то устной рекомендации.";
            break;
        default:
            $message = "Клиент является случайным клиентом.";
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
    <title>Результат выбора типа рекламы</title>
</head>
<body>
    <h2>Результат выбора типа рекламы</h2>
    <p><?php echo $message; ?></p>
    <a href="index.html">Выбрать еще раз</a>
</body>
</html>
