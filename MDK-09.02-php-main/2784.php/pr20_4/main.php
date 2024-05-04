<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Приветствие</title>
</head>
<body>
    <h2>Приветствие</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="gender">Выберите ваш пол:</label>
        <select id="gender" name="gender">
            <option value="male">Мужской</option>
            <option value="female">Женский</option>
        </select>
        <button type="submit">Приветствовать</button>
    </form>

    <?php  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $gender = $_POST['gender'];
        $greeting = ($gender == 'male') ? 'Господин' : 'Госпожа';

        echo "<p>Приветствую вас, $greeting!</p>";
    }
    ?>
</body>
</html>
