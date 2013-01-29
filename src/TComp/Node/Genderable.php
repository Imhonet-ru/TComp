<?php

namespace TComp\Node;

interface Genderable
{

    const MALE   = 0,
          FEMALE = 1,
          NEUTER = 2;

    public function setGender($gender);

    public function getGender();

}
