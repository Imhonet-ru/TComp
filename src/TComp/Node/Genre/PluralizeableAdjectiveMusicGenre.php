<?php

namespace TComp\Node\Genre;

use TComp\Node\PluralizeableAdjectable;

class PluralizeableAdjectiveMusicGenre extends MusicGenre
    implements PluralizeableAdjectable
{

    static $pluralizedAdjectives = array(
        "rock"              => "роковые",
        "alt-rock"          => "альтернативные рок",
        "garage_rock"       => "гаражные рок",
        "indie_rock"        => "инди-рок",
        "new_wave"          => "нью-вейв",
        "classic_rock"      => "роковые",
        "blues_rock"        => "блюз-рок",
        "folk_rock"         => "фолк-рок",
        "hard_rock"         => "хард-рок",
        "instrumental_rock" => "инструментально роковые",
        "pop_rock"          => "поп-рок",
        "progressive_rock"  => "прогрессив рок",
        "psy_rock"          => "психоделик роковые",
        "rocknroll"         => "рок-н-рольные",
        "punk_alt"          => "панк альтернативные",
        "alternative"       => "альтернативные",
        "punk"              => "панковые",
        "hardcore_punk"     => "хардкор-панк",
        "pop_punk"          => "поп-панк",
        "post_punk"         => "пост-панк",
        "metal"             => "метал",
        "alt_metal"         => "альтернативные метал",
        "industrial"        => "индустриальные",
        "metalcore"         => "металкор",
        "neo_metal"         => "нео-метал",
        "folk_metal"        => "фолк-метал",
        "gothic_metal"      => "готик-метал",
        "progressive_metal" => "прогрессив-метал",
        "death_metal"       => "дэт-метал",
        "symphonic_metal"   => "синмоник-метал",
        "speed_metal"       => "спид-метал",
        "traditional_metal" => "традиционные метал",
        "heavy_metal"       => "хэви-метал",
        "trash_metal"       => "трэш-метал",
        "extreme_metal"     => "экстремальные метал",
        "black_metal"       => "черные метал",
        "doom_metal"        => "дум-метал",
        "electronic"        => "электронные",
        "electro"           => "электро",
        "synth_pop"         => "синтипоп",
        "breakbeat"         => "брейкбит",
        "IDM"               => "IDM",
        "house"             => "хаус",
        "minimal_house"     => "минимал-хаус",
        "tech_house"        => "тек-хаус",
        "deep_house"        => "дип-хаус",
        "progressive_house" => "прогрессив-хаус",
        "garage_house"      => "гаражные хаус",
        "acid_house"        => "эйсид хаус",
        "club_house"        => "клаб-хаус",
        "tribal_house"      => "трайбал хаус",
        "techno"            => "техно",
        "hardcore_techno"   => "хардкор техно",
        "ambient_downtempo" => "эмбиент и даунтемпо",
        "ambient"           => "эмбиент",
        "new_age"           => "нью эйдж",
        "trip_hop"          => "трип-хоп",
        "acid_jazz"         => "эйсид джаз",
        "chillout"          => "чиллаут",
        "experimental_electronic" => "эксперементально-электронные",
        "trance"            => "трансовые",
        "hard_trance"       => "хард транс",
        "progressive_trance" => "прогрессив транс",
        "psy_trance"        => "пси-транс",
        "dnb"               => "драм-н-бейс",
        "hip_hop"           => "хип-хоп",
        "reggae"            => "регги",
        "ska"               => "ска",
        "dub"               => "даб",
        "jazz"              => "джазовые",
        "easy_listening"    => "easy listening",
        "blues"             => "блюзовые",
        "funk_soul_rnb"     => "фанк, соул, RnB",
        "country_folk"      => "кантри и фолк",
        "folk"              => "фолк",
        "country"           => "кантри",
        "classic"           => "классические",
        "misc"              => "разные",
        "christmas"         => "рождественские",
        "soundtrack"        => "саундтреки"
    );


    public function getPluralizedAdjective()
    {
        return self::$pluralizedAdjectives[$this->genre];
    }

    public function shouldRemoveNextNoun()
    {
        return $this->genre === "soundtrack";
    }

}
