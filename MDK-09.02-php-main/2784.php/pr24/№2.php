<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
    Выберите файл: <input type="file" name="filename" size="10"> <br><br>
    <input type="submit" value="Загрузить">
</form>

<?php
if ($_FILES && $_FILES['filename']['error']== UPLOAD_ERR_OK) {
    $name = $_FILES['filename']['name'];
    move_uploaded_file($_FILES['filename']['tmp_name'], $name);
    echo "Файл загружен";
    echo '<img height = "350" width = "350" src="'.$name.'">';
}
?>
</body>
</html>