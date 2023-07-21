<?php

class Movie
{
    public $title;
    public $relase_date;
    public $genre;
    public $actors;

    public function __construct(
        $title,
        $relase_date,
        $genre,
        $actors
    ) {
        $this->title = $title;
        $this->relase_date = $relase_date;
        $this->genre = $genre;
        $this->actors = $actors;
    }

    public function getYears()
    {
        $current_date = date("Y");
        $year = $current_date - $this->relase_date;
        return $year;
    }
}
