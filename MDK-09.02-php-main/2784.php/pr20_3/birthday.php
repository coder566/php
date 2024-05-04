<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проверка месяца рождения</title>
</head>
<body>
    <h2>Проверка месяца рождения</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $month = $_POST['month'];
        if ($month >= 3 && $month <= 5) {
            $message = "Встретимся весной!";
        } elseif ($month >= 6 && $month <= 8) {
            $message = "Будем отмечать твой день рождения летом!";
        } elseif ($month >= 9 && $month <= 11) {
            $message = "До осени!";
        } else {
            $message = "Вы родились зимой!";
        }
        
        echo "<p>$message</p>";
        echo "<a href=\"{$_SERVER['PHP_SELF']}\">Попробовать еще раз</a>";
    } else {
        echo <<<FORM
        <form action="{$_SERVER['PHP_SELF']}" method="post">
            <label for="month">Введите месяц своего рождения (цифрой):</label>
            <input type="number" id="month" name="month" min="1" max="12" required>
            <button type="submit">Проверить</button>
        </form>
FORM;
    }
    ?>
</body>
</html>
