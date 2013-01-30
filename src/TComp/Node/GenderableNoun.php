<?php

namespace TComp\Node;

class GenderableNoun extends Noun
    implements Declinable
{

    protected $declination = 0;

    public function setDeclination($declination)
    {
        $this->declination = $declination;
        return $this;
    }

    public function getDeclination()
    {
        return $this->declination;
    }

}
