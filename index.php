<?php

include "Actor.php";
include "Genre.php";
include "Movie.php";
include "MovieCast.php";
include "Producer.php";
include "Role.php";


// the role for Batman
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


$movie1 = new Movie("Batman 1","07-04-1915","2h 55m","synopsis","poster",$genre1,$producer1);
$movie2 = new Movie("Batman 2","07-04-1915","2h 55m","synopsis","poster",$genre1,$producer1);
$movie3 = new Movie("Batman 3","07-04-1915","2h 55m","synopsis","poster",$genre1,$producer1);


$movieCast1 = new MovieCast($movie1,$actor1,$role1);
$movieCast2 = new MovieCast($movie2,$actor2,$role1);
$movieCast3 = new MovieCast($movie3,$actor3,$role1);



// settings for star wars
$person4= new Person("Ford","Harrison","male","13-07-1942");
$person5= new Person("Hamill","Mark","male","06-05-1961");


$actor4= new Actor($person4);
$actor5= new Actor($person5);


$role2= new Role("Han Solo");
$role3= new Role("Luke Skywalker");


$genre2= new Genre("Sci-fi");


$personP2= new Person("George","Lucas","male","02-12-1945");
$producer2 = new Producer($personP2);


$movie4 = new Movie("Star Wars Episode IV","19-08-1977","2h 1m","synopsis","poster",$genre2,$producer2);


$movieCast4 = new MovieCast($movie4,$actor4,$role2);
$movieCast5 = new MovieCast($movie4,$actor5,$role3);



// blade runner
$person7= new Person("Hauer","Rutger","male","23-01-1944");


$actor7= new Actor($person7);


$role4= new Role("Rick Deckard");
$role5= new Role("Roy Batty");


$personP3= new Person("Deeley","Michael","male","06-08-1932");
$producer3 = new Producer($personP3);


$movie5 = new Movie("Blade Runner","15-09-1982","1h 57m","synopsis","poster",$genre2,$producer3);


$movieCast6 = new MovieCast($movie5,$actor4,$role4);
$movieCast7 = new MovieCast($movie5,$actor7,$role5);



// The italian job
$person8= new Person("Statham","Jason","male","26-07-1967");
$person9= new Person("Wahlberg","Mark","male","05-06-1971");
$person10= new Person("Theron","Charlize","female","07-08-1975");


$actor8= new Actor($person8);
$actor9= new Actor($person9);
$actor10= new Actor($person10);


$role6= new Role("Handsome Rob");
$role7= new Role("Charlie Croker");
$role8= new Role("Stella Bridger");


$movie6 = new Movie("The italian job","17-08-2003","1h 51m","synopsis","poster",$genre1,$producer3);


$movieCast8 = new MovieCast($movie6,$actor8,$role6);
$movieCast9 = new MovieCast($movie6,$actor9,$role7);
$movieCast10 = new MovieCast($movie6,$actor10,$role8);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.21/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="css/uikit.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></head>
<body>

    <?php
    // list of actors that played the same role
    echo "<h1 class='uk-heading-divider uk-text-center uk-text-bold'>". $role1 ."</h1>";
    echo $role1->showMovieCast();
    // remove the role name
 

    // list of a movie casting 
    echo "<h1 class='uk-heading-divider uk-text-center uk-text-bold'> Movie casting for ". $movie4->getTitle() ."</h1>";
    echo $movie4->showMovieCast(); 


    // list movies by genres
    echo "<h1 class='uk-heading-divider uk-text-center uk-text-bold'> $genre2 </h1>";
    echo "<h4 class=''> Number of movies stored in that genre is : <span class='uk-text-bolder'>". $genre2->numberMovies() ."</span></h4>" ;
    echo $genre2->showMovies();

    
    // list of movies by actors
    echo "<h1 class='uk-heading-divider uk-text-center uk-text-bold'> Filmography of ". $person4->getName()." ". $person4->getFamilyName() ." </h1>";
    echo $actor4->showMovieCast();
    // title of movies only
 
    
    // list of movies by producer
    echo "<h1 class='uk-heading-divider uk-text-center uk-text-bold'> Filmography of ". $personP3->getName()." ". $personP3->getFamilyName() ." </h1>";
    echo $producer3->showMovies();
    // title of movies only
    ?>

    

</body>
</html>