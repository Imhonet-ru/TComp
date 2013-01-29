<?php

require "vendor/autoload.php";

$c = new \TComp\Composer();

$c->addNode(new \TComp\Node\Country\AdjectiveCountry("russia"));
$c->addNode((new \TComp\Node\GenderableNoun("музыка"))->setGender(\TComp\Node\Genderable::FEMALE));
$c->addNode(new \TComp\Node\Epoch\PluralizeableAdjectiveEpoch("90s"));

echo $c->compose() . ".";
echo "\n";

// TODO чтобы можно было задать ноды в любом порядке (нужен специальный composer под каждый отдельный caption, и какой-то DecisionMaker)
