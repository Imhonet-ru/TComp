<?php

namespace TComp\Node\Country;

use TComp\Node\PluralizeableAdjectable;

class PluralizeableAdjectiveCountry extends Country
    implements PluralizeableAdjectable
{

    private static $pluralizedAdjectives = array(
        "australia" => "Австралийские",
        "austria"   => "Австрийские",
        "argentina" => "Аргентинские",
        "belgium"   => "Бельгийские",
        "brazil"    => "Бразильские",
        "uk"        => "Великобританские",
        "hungary"   => "Венгерские",
        "germany"   => "Германские",
        "greece"    => "Грецкие",
        "denmark"   => "Датские",
        "israel"    => "Израильские",
        "india"     => "Индийские",
        "ireland"   => "Ирландские",
        "spain"     => "Испанские",
        "italy"     => "Итальянские",
        "canada"    => "Канадские",
        "latvia"    => "Латвийские",
        "mexico"    => "Мексиканские",
        "netherlands" => "Нидерландские",
        "new_zealand" => "Новозеландские",
        "norway"    => "Норвежские",
        "poland"    => "Польские",
        "russia"    => "Российские",
        "usa"       => "Американские",
        "turkey"    => "Турецкие",
        "finland"   => "Финские",
        "france"    => "Французские",
        "czech"     => "Чешские",
        "switzerland" => "Швейцарские",
        "sweden"    => "Швецкие",
        "estonia"   => "Эстонские",
        "jamaica"   => "Ямайские",
        "japan"     => "Японские"
    );

    public function getPluralizedAdjective()
    {
        return self::$pluralizedAdjectives[$this->countryCode];
    }

    public function initialized()
    {
        return isset(self::$pluralizedAdjectives[$this->countryCode]);
    }

}
