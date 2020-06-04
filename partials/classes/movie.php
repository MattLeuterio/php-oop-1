<?php

class Movie {
    // Props
    public $title;
    public $format;
    public $synopsis;
    public $director;
    public $genre;
    public $cover;
    public $trailer;

    //constructor
    public function __construct(
        $_title, 
        $_format, 
        $_summary, 
        $_dir, 
        $_genre, 
        $_cover, 
        $_trailer) {
         
            $this->title = $_title;
            $this->format = $_format;
            $this->summary = $_summary;
            $this->director = $_dir;
            $this->genre = $_genre;
            $this->cover = $_cover;
            $this->trailer = $_trailer;

    }
}

$movie_1 = new Movie('Inception',
                    'Film', 
                    'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.',
                    'Christopher Nolan',
                    'Action',
                    'inception.jpg',
                    '8hP9D6kZseM');

$movie_2 = new Movie('Narcos: Mexic',
                    'Tv-Series', 
                    '"Narcos: Mexico explores the origin of the modern war on drugs, beginning at the time when Mexican traffickers were a loose and disorganized confederation of small-time independent cannabis growers and dealers."',
                    'Carlo Bernard, Doug Miro',
                    'Crime drama',
                    'bg-narcos.webp',
                    'eHdRMOAT-Lc');

$movie_3 = new Movie('Star Wars: Episode IX - The Rise of Skywalker',
                    'Film', 
                    'The surviving members of the resistance face the First Order once again, and the legendary conflict between the Jedi and the Sith reaches its peak bringing the Skywalker saga to its end.',
                    'J. J. Abrams',
                    'Action fantasy',
                    'starwars.jpg',
                    '8Qn_spdM5Zg');