<?php


$products = array(
    array(
        "название" => "Яблоко",
        "цена" => 50,
        "описание" => "Свежие и сочные яблоки",
        "изображение" => "\images\apple.jpg"
    ),
    array(
        "название" => "Груша",
        "цена" => 60,
        "описание" => "Сладкие и ароматные груши",
        "изображение" => "\images\pear.jpg"
    ),
    array(
        "название" => "Апельсин",
        "цена" => 40,
        "описание" => "Сочные апельсины прямиком из сада",
        "изображение" => "\images\orange.jpg"
    )
);


foreach ($products as $product) {
    echo '<div style="border: 1px solid #ccc; border-radius: 5px; padding: 10px; margin: 10px; width: 200px; float: left;">';
    echo '<img src="' . $product["изображение"] . '" alt="' . $product["название"] . '" style="width: 100%;"><br>';
    echo '<h3>' . $product["название"] . '</h3>';
    echo '<p><strong>Цена: </strong>' . $product["цена"] . ' руб.</p>';
    echo '<p><strong>Описание: </strong>' . $product["описание"] . '</p>';
    echo '</div>';
}

?>