<?php

namespace TComp\Node\Country;

use TComp\Node\Adjectable;

class AdjectiveCountry extends Country
    implements Adjectable
{

    private static $adjectives = array(
        "australia" => "австралийс",
        "austria"   => "австрийс",
        "argentina" => "аргентинс",
        "belgium"   => "бельгийс",
        "brazil"    => "бразильс",
        "uk"        => "великобританк",
        "hungary"   => "венгерс",
        "germany"   => "немец",
        "greece"    => "грец",
        "denmark"   => "датс",
        "israel"    => "израильс",
        "india"     => "индийс",
        "ireland"   => "ирландс",
        "spain"     => "испанс",
        "italy"     => "итальянс",
        "canada"    => "канадс",
        "latvia"    => "латвийс",
        "mexico"    => "мексиканс",
        "netherlands" => "нидерландс",
        "new_zealand" => "новозеландс",
        "norway"    => "норвежс",
        "poland"    => "польс",
        "russia"    => "российс",
        "usa"       => "американс",
        "turkey"    => "турец",
        "finland"   => "финс",
        "france"    => "французс",
        "czech"     => "чешс",
        "switzerland" => "швейцарс",
        "sweden"    => "шведс",
        "estonia"   => "эстонс",
        "jamaica"   => "ямайс",
        "japan"     => "японс"
    );

    private static $declinations = array(
        "кий", "кая", "кое", "кие"
    );

    public function getAdjective()
    {
        return self::$adjectives[$this->countryCode] . self::$declinations[$this->decline];
    }

    public function initialized()
    {
        return isset(self::$adjectives[$this->countryCode]);
    }

}
