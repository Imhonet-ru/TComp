<?php

namespace TComp\Node\Year;

use TComp\Node\Adjectable;

class AdjectiveYear extends Year
    implements Adjectable
{

    public function getAdjective()
    {
        return $this->year . " года";
    }

    public function initialized()
    {
        return (bool)(int)$this->year && is_numeric($this->year);
    }

}
