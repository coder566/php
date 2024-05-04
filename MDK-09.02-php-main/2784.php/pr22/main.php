<?php

// Установка временной зоны на Самару
date_default_timezone_set('Europe/Samara');

// Функция для перевода дня недели на русский язык
function translateDayOfWeek($dayOfWeek) {
    $days = array(
        "Monday" => "Понедельник",
        "Tuesday" => "Вторник",
        "Wednesday" => "Среда",
        "Thursday" => "Четверг",
        "Friday" => "Пятница",
        "Saturday" => "Суббота",
        "Sunday" => "Воскресенье"
    );
    return $days[$dayOfWeek];
}

// 5.1 Получение текущей информации о дате и времени в Самаре
$current_date = date("d F Y (", time()) . translateDayOfWeek(date("l")) . ")\nTime: H:i:s";

echo "Текущая дата и время в Самаре: $current_date<br>";

// 5.2 Определение, сколько дней осталось до Нового года
$current_year = date("Y");
$next_year = $current_year + 1;
$new_year_date = strtotime("1 January $next_year");
$current_date = time();

$days_until_new_year = floor(($new_year_date - $current_date) / (60 * 60 * 24));

echo "До Нового года осталось $days_until_new_year дней<br>";

// 5.3 Определение дня недели 100 дней назад
$date_100_days_ago = strtotime("-7 days");
$day_of_week = translateDayOfWeek(date("l", $date_100_days_ago));

echo "100 дней назад был $day_of_week<br>";

?>