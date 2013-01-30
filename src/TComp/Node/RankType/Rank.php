<?php

namespace TComp\Node\RankType;

use TComp\Node\Node,
    TComp\Node\Adjectable;

class Rank extends Node
    implements Adjectable
{

    private $rankType;

    private static $ranks = array(
        "best" => "лучш",
        "popular" => "популярн",
        "novelties" => "нов"
    );

    private static $bestDeclinations = array(
        "ий", "ая", "ее", "ие"
    );

    private static $declinations = array(
        "ый", "ая", "ое", "ые"
    );


    public function __construct($rankType)
    {
        $this->rankType = $rankType;
    }

    public function getAdjective()
    {
        return self::$ranks[$this->rankType] .
            ($this->rankType === "best" ? self::$bestDeclinations[$this->decline] : self::$declinations[$this->decline]);
    }

    public function initialized()
    {
        return isset(self::$ranks[$this->rankType]);
    }

}
