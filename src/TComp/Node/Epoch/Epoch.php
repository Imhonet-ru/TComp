<?php

namespace TComp\Node\Epoch;

use TComp\Node\Node;

abstract class Epoch extends Node
{

    protected $epoch;


    public function __construct($epoch)
    {
        $this->epoch = $epoch;
    }

    public function getEpoch()
    {
        return $this->epoch;
    }

}
