<?php

namespace TComp\Node\Genre;

use TComp\Node\Nounable,
    TComp\Node\Genderable;

class NounMusicGenre extends MusicGenre
    implements Nounable, Genderable
{

    private static $nouns = array(
        "rock"              => "рок",
        "alt-rock"          => "альтернативный рок",
        "garage_rock"       => "гаражный рок",
        "indie_rock"        => "инди-рок",
        "new_wave"          => "нью-вейв",
        "classic_rock"      => "классический рок",
        "blues_rock"        => "блюз-рок",
        "folk_rock"         => "фолк-рок",
        "hard_rock"         => "хард-рок",
        "instrumental_rock" => "инструментальный рок",
        "pop_rock"          => "поп-рок",
        "progressive_rock"  => "прогрессив-рок",
        "psy_rock"          => "психоделик-рок",
        "rocknroll"         => "рок-н-ролл",
        "punk_alt"          => "альтернативный панк",
        "alternative"       => "альтернатива",
        "punk"              => "панк",
        "hardcore_punk"     => "хардкор-панк",
        "pop_punk"          => "поп-панк",
        "post_punk"         => "пост-панк",
        "metal"             => "метал",
        "alt_metal"         => "альтернативный метал",
        "industrial"        => "индастриал",
        "metalcore"         => "металкор",
        "neo_metal"         => "нео-метал",
        "folk_metal"        => "фолк-метал",
        "gothic_metal"      => "готик-метал",
        "progressive_metal" => "прогрессив-метал",
        "death_metal"       => "дэт-метал",
        "symphonic_metal"   => "симфоник-метал",
        "speed_metal"       => "спид-метал",
        "traditional_metal" => "традиционный метал",
        "heavy_metal"       => "тяжелый метал",
        "trash_metal"       => "трэш-метал",
        "extreme_metal"     => "экстремальный метал",
        "black_metal"       => "черный метал",
        "doom_metal"        => "дум-метал",
        "electronic"        => "электроника",
        "electro"           => "электро",
        "synth_pop"         => "синтипоп",
        "breakbeat"         => "брейкбит",
        "IDM"               => "IDM",
        "house"             => "хаус",
        "minimal_house"     => "минимал-хаус",
        "tech_house"        => "тек-хаус",
        "deep_house"        => "дип-хаус",
        "progressive_house" => "прогрессив-хаус",
        "garage_house"      => "гаражный хаус",
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
        "experimental_electronic" => "эксперементальная электроника",
        "trance"            => "транс",
        "hard_trance"       => "хард транс",
        "progressive_trance" => "прогрессив транс",
        "psy_trance"        => "пси-транс",
        "dnb"               => "драм-н-бейс",
        "hip_hop"           => "хип-хоп",
        "reggae"            => "регги",
        "ska"               => "ска",
        "dub"               => "даб",
        "jazz"              => "джаз",
        "easy_listening"    => "easy listening",
        "blues"             => "блюз",
        "funk_soul_rnb"     => "фанк, соул, RnB",
        "country_folk"      => "кантри и фолк",
        "folk"              => "фолк",
        "country"           => "кантри",
        "classic"           => "классика",
        "misc"              => "разное",
        "christmas"         => "рождественские",
        "soundtrack"        => "саундтреки"
    );

    public function getNoun()
    {
        return self::$nouns[$this->genre];
    }

    public function initialized()
    {
        return isset(self::$nouns[$this->genre]);
    }

    public function setGender($gender) { }

    public function getGender()
    {
        return self::$genders[$this->genre];
    }

}
