<?php

namespace TComp\Node;

interface Declinable
{

    const MALE   = 0,
          FEMALE = 1,
          NEUTER = 2,
          PLURALIZED = 3;

    public function setDeclination($declination);

    public function getDeclination();

}
