<?php

namespace TComp\Node\Country;

use TComp\Node\Node;

abstract class Country extends Node
{

    protected $countryCode;


    public function __construct($countryCode)
    {
        $this->countryCode = $countryCode;
    }

    public function getCountryCode()
    {
        return $this->countryCode;
    }

}
