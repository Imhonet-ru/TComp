<?php

namespace TComp\Node\Epoch;

use TComp\Node\PluralizeableAdjectable;

class AdjectiveEpoch extends Epoch
    implements PluralizeableAdjectable
{

    private static $pluralizedAdjective = array(
        "70s" => "семидесятых",
        "80s" => "восьмидесятых",
        "90s" => "девяностых",
        "00s" => "нулевых",
        "10s" => "десятых"
    );

    public function getPluralizedAdjective()
    {
        return self::$pluralizedAdjective[$this->epoch];
    }

    public function initialized()
    {
        return isset(self::$pluralizedAdjective[$this->epoch]);
    }

}
