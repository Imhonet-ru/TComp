<?php

require "vendor/autoload.php";

mb_internal_encoding("UTF-8");

$c = new \TComp\Composer();

$params = [
    "category" => "rock",
    "country"  => "germany",
    "epoch"    => "70s"
];

if ($params["category"]) {
    $cat = new \TComp\Node\Genre\NounMusicGenre($params["category"]);
} else {
    $cat = new \TComp\Node\DeclinableNoun("музыка");
    $cat->setDeclination(\TComp\Node\Declinable::FEMALE);
}

$rank = new \TComp\Node\RankType\Rank("best");
$rank->declineTo($cat->getDeclination());

$country = new \TComp\Node\Country\AdjectiveCountry($params["country"]);
$country->declineTo($cat->getDeclination());
$epoch = new \TComp\Node\Epoch\AdjectiveEpoch($params["epoch"]);

$c->addNode($rank);
$c->addNode($country);
$c->addNode($cat);
$c->addNode($epoch);
echo $c->compose(), "\n";


$c->addNode($rank);
$c->addNode($country);
$c->addNode($cat);
echo $c->compose(), "\n";


$c->addNode($rank);
$c->addNode($cat);
echo $c->compose(), "\n";

$allPluralized = new \TComp\Node\Noun("Все");
$allPluralized->declineTo(\TComp\Node\Declinable::PLURALIZED);

$country = new \TComp\Node\Country\AdjectiveCountry($params["country"]);
$country->declineTo(\TComp\Node\Declinable::PLURALIZED);

$rank->declineTo(\TComp\Node\Declinable::PLURALIZED);

if (!$params["category"]) {
    $cat = new \TComp\Node\Noun("");
}

$c->addNode($rank);
$c->addNode($country);
$c->addNode($cat);
$c->addNode(new \TComp\Node\Noun("треки"));
$c->addNode($epoch);
echo $c->compose(), "\n";

$c->addNode($rank);
$c->addNode($country);
$c->addNode($cat);
$c->addNode(new \TComp\Node\Noun("альбомы"));
$c->addNode($epoch);
echo $c->compose(), "\n";

$c->addNode($allPluralized);
$c->addNode($country);
$c->addNode($cat);
$c->addNode(new \TComp\Node\Noun("артисты"));
$c->addNode($epoch);
echo $c->compose(), "\n";

echo "\n";

// TODO чтобы можно было задать ноды в любом порядке (нужен специальный composer под каждый отдельный caption, и какой-то DecisionMaker)
