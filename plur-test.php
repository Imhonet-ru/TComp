<?php

require "vendor/autoload.php";

$c = new \TComp\Composer();

$c->addNode(new \TComp\Node\WordSequence("Все популярные"));
$c->addNode(new \TComp\Node\Country\PluralizeableAdjectiveCountry("usa"));
$c->addNode(new \TComp\Node\Genre\PluralizeableAdjectiveMusicGenre("progressive_metal"));
$c->addNode(new \TComp\Node\Noun("треки"));
$c->addNode(new \TComp\Node\Epoch\PluralizeableAdjectiveEpoch("90s"));

echo $c->compose();
echo "\n";


$c = new \TComp\Composer();

$c->addNode(new \TComp\Node\Country\PluralizeableAdjectiveCountry("japan"));
$c->addNode(new \TComp\Node\Adjective("популярные"));
$c->addNode(new \TComp\Node\Genre\PluralizeableAdjectiveMusicGenre("pop_punk"));
$c->addNode(new \TComp\Node\Noun("треки"));
$c->addNode(new \TComp\Node\Epoch\PluralizeableAdjectiveEpoch("90s"));

echo $c->compose();
echo "\n";

$c = new \TComp\Composer();

$c->addNode(new \TComp\Node\Country\PluralizeableAdjectiveCountry("italy"));
$c->addNode(new \TComp\Node\Noun("детективы"));
//$c->addNode(new \TComp\Node\Noun("Фильмы"));

$y = new \TComp\Node\Year\AdjectiveYear(2012);

$c->addNode($y);

if (true /* use way */) {
    $c->addNode(new \TComp\Node\WordSequence("в кинотеатрах"));
    $y->addText(",");
}

echo $c->compose() . ".";
echo "\n";

// TODO чтобы можно было задать ноды в любом порядке (нужен специальный composer под каждый отдельный caption, и какой-то DecisionMaker)
