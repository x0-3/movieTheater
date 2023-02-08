<?php

class Actor{
    private Person $person;
    private array $movieCasts;

    public function __construct(Person $person){
        $this->person = $person;
        $this->movieCasts= [];
    }

    // getter
    public function getPerson()
    {
        return $this->person;
    }
 
    // setter
    public function setPerson()
    {
        $this->person;
    }

    // add $movieCasts in an array
    public function addMovieCast(MovieCast $movieCast){
        $this-> movieCasts[] = $movieCast;
    }
    // show the liste of the movie cast with a forEach
    public function showMovieCast(){
        foreach($this->movieCasts as $movieCast){
            echo $movieCast;
        }

    }
}