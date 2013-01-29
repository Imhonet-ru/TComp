<?php

namespace TComp\Node\Genre;

use TComp\Node\Node;

abstract class MusicGenre extends Node
{

    protected $genre;


    public function __construct($genre)
    {
        $this->genre = $genre;
    }

    public function getGenre()
    {
        return $this->genre;
    }

}
