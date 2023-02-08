<?php

include "Actor.php";
include "Genre.php";
include "Movie.php";
include "MovieCast.php";
include "Producer.php";
include "Role.php";


$person1= new Person("Keaton","Michael","male","05-09-1951");
$person2= new Person("Kilmer","Val","male","31-12-1959");
$person3= new Person("Clooney","George","male","06-05-1961");

$actor1= new Actor($person1);
$actor2= new Actor($person2);
$actor3= new Actor($person3);

$role1= new Role("Batman");

$genre1= new Genre("Action");

$personP1= new Person("Reeves","Matt","male","02-12-1945");
$producer1 = new Producer($personP1);

$movie1 = new Movie("Batman 1","07-04-1915","2h 55","synopsis","poster",$genre1,$producer1);
$movie2 = new Movie("Batman 2","07-04-1915","2h 55","synopsis","poster",$genre1,$producer1);
$movie3 = new Movie("Batman 3","07-04-1915","2h 55","synopsis","poster",$genre1,$producer1);


$movieCast1 = new MovieCast($movie1,$actor1,$role1);
$movieCast2 = new MovieCast($movie2,$actor2,$role1);
$movieCast3 = new MovieCast($movie3,$actor3,$role1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    // list of actors that played the same role
    echo "<h1>". $role1 ."</h1>";
    echo $role1->showMovieCast();


    
    
    
    
    
    


    ?>

</body>
</html>