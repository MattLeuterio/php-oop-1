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

    // Methods / Print

    public function printMovieInfo() {
        echo "<h4> $this->format </h4>
              <h2> $this->title </h2>
              <h3>
                <span> $this->genre -</span> 
                <span>$this->director</span> 
              </h3>
              <p>
                $this->summary
              </p>";
    }
}

