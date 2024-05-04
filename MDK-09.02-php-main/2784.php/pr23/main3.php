<?php 

if ($_SERVER["REQUEST_METHOD"] ==  "POST") {

    $movieTittle = $_POST["movie_tittle"];
    $actorName = $_POST["actor_name"];

    function printMovieInfo($movieTitle, $actorName){
        echo "Мой любимый фильм - $movieTitle <br>";
        echo "Главную роль в фильме играет - $actorName";
    }

    printMovieInfo($movieTittle, $actorName);
}
?>