<?php 
$currentHour = date('G');

if ($currentHour >=6 && $currentHour < 12){
    echo "Доброе утро!";
}elseif ($currentHour >=12 && $currentHour < 17){
    echo "Добрый день!";
}elseif ($currentHour >=17 && $currentHour <24){
    echo "Добрый вечер!";
} else {
    echo "Доброй ночи!";
}
?>