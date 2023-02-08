<?php

include "Actor.php";
include "Genre.php";
include "Movie.php";
include "MovieCast.php";
include "Producer.php";
include "Role.php";

$person1 = new Person("Deeley","Michael","male","06-08-1932"); 
$producer1= new Producer($person1);
$genre1= new Genre("sci-fi");
$movie1= new Movie("Blade Runner","1982","1h57","12.5","poster",$genre1,$producer1);

echo $movie1;