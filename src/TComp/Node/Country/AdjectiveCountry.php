<?php

namespace TComp\Node\Country;

use TComp\Node\Adjectable;

class AdjectiveCountry extends Country
    implements Adjectable
{

    private static $adjectives = array(
        "australia" => array("Австралийский", "Австралийская", "Австралийское"),
        "austria"   => array("Австрийский", "Австрийская", "Австрийское"),
        "argentina" => array("Аргентинский", "Аргентинская", "Аргентинское"),
        "belgium"   => array("Бельгийский", "Бельгийская", "Бельгийское"),
        "brazil"    => array("Бразильский", "Бразильская", "Бразильское"),
        "uk"        => array("Великобританский", "Великобританская", "Великобританское"),
        "hungary"   => array("Венгерский", "Венгерская", "Венгерское"),
        "germany"   => array("Немецкий", "Немецкая", "Немецкое"),
        "greece"    => array("Грецкий", "Грецкая", "Грецкое"),
        "denmark"   => array("Датский", "Датская", "Датское"),
        "israel"    => array("Израильский", "Израильская", "Израильское"),
        "india"     => array("Индийский", "Индийская", "Индийское"),
        "ireland"   => array("Ирландский", "Ирландская", "Ирландское"),
        "spain"     => array("Испанский", "Испанская", "Испанское"),
        "italy"     => array("Итальянский", "Итальянская", "Итальянское"),
        "canada"    => array("Канадский", "Канадская", "Канадское"),
        "latvia"    => array("Латвийский", "Латвийская", "Латвийское"),
        "mexico"    => array("Мексиканский", "Мексиканская", "Мексиканское"),
        "netherlands" => array("Нидерландский", "Нидерландская", "Нидерландское"),
        "new_zealand" => array("Новозеландский", "Новозеландская", "Новозеландское"),
        "norway"    => array("Норвежский", "Норвежская", "Норвежское"),
        "poland"    => array("Польский", "Польская", "Польское"),
        "russia"    => array("Российский", "Российская", "Российское"),
        "usa"       => array("Американский", "Американская", "Американское"),
        "turkey"    => array("Турецкий", "Турецкая", "Турецкое"),
        "finland"   => array("Финский", "Финская", "Финское"),
        "france"    => array("Французский", "Французская", "Французское"),
        "czech"     => array("Чешский", "Чешская", "Чешское"),
        "switzerland" => array("Швейцарский", "Швейцарская", "Швейцарское"),
        "sweden"    => array("Шведский", "Шведская", "Шведское"),
        "estonia"   => array("Эстонский", "Эстонская", "Эстонское"),
        "jamaica"   => array("Ямайский", "Ямайская", "Ямайское"),
        "japan"     => array("Японский", "Японская", "Японское")
    );

    public function getAdjective()
    {
        return self::$adjectives[$this->countryCode][$this->decline];
    }

    public function initialized()
    {
        return isset(self::$adjectives[$this->countryCode]);
    }

}