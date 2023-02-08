<?php

class Producer{
    // attribute
    private Person $person;
    private array $movies;


    public function __construct(Person $person){
        $this->person = $person;
        $this->movies= [];
    }


    // setter
    public function setPerson()
    {
        $this->person;
    }


    // getter
    public function getPerson()
    {
        return $this->person;
    }


    // add $movies in an array
    public function addMovies(Movie $movie){
        $this-> movies[] = $movie;
    }
    // show the liste of movies with a forEach
    public function showMovies(){
        foreach($this->movies as $movie){
            echo $movie;
        }
    }

    public function __toString()
    {
        return "person : {$this->person}";
    }
   
}

class Person extends Producer{
    // Attribute 
    private $familyName;
    private $name;
    private $gender;
    private $birthday;

    
    // construct
    public function __construct($familyName,$name,$gender,$birthday)
    {
        $this-> familyName =$familyName;
        $this-> name =$name;
        $this-> gender =$gender;
        $this-> birthday =$birthday;
    }


    // setter
    public function setFamilyName()
    {
        $this->familyName;
    }
    public function setName()
    {
        $this->name;
    }
    public function setGender()
    {
        $this->gender ;
    }
    public function setBirthday()
    {
        $this->birthday;
    }


    // getter
    public function getFamilyName()
    {
        return $this->familyName;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }


    // to string
    public function __toString()
    {
        return "name : {$this-> familyName}{$this-> name} gender : {$this-> gender} birthday: {$this-> birthday} ";
    }
}