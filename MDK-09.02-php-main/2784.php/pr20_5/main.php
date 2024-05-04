<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица умножения</title>
</head>
<body>
    <h2>Таблица умножения</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="number">Введите число для таблицы умножения (до 10):</label>
        <input type="number" id="number" name="number" min="1" max="10" required>
        <button type="submit">Показать таблицу</button>
    </form>

    <?php
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $number = $_POST['number'];

        
        echo "<h3>Таблица умножения на $number:</h3>";
        echo "<table border='1'>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td>$number</td>";
            echo "<td>*</td>";
            echo "<td>$i</td>";
            echo "<td>=</td>";
            echo "<td>" . ($number * $i) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
