<?php

namespace TComp\Node\Year;

use TComp\Node\Node;

abstract class Year extends Node
{

    protected $year;


    public function __construct($year)
    {
        $this->year = $year;
    }

    public function getYear()
    {
        return $this->year;
    }

}
