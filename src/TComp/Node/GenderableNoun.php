<?php

namespace TComp\Node;

class GenderableNoun extends Noun
    implements Genderable
{

    protected $gender;


    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    public function getGender()
    {
        return $this->gender;
    }

}
