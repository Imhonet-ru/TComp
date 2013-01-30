<?php

namespace TComp\Node\Genre;

use TComp\Node\Node;

abstract class MusicGenre extends Node
{

    protected static $genders = array(
        "rock"              => 0,
        "alt-rock"          => 0,
        "garage_rock"       => 0,
        "indie_rock"        => 0,
        "new_wave"          => 0,
        "classic_rock"      => 0,
        "blues_rock"        => 0,
        "folk_rock"         => 0,
        "hard_rock"         => 0,
        "instrumental_rock" => 0,
        "pop_rock"          => 0,
        "progressive_rock"  => 0,
        "psy_rock"          => 0,
        "rocknroll"         => 0,
        "punk_alt"          => 0,
        "alternative"       => 1,
        "punk"              => 0,
        "hardcore_punk"     => 0,
        "pop_punk"          => 0,
        "post_punk"         => 0,
        "metal"             => 0,
        "alt_metal"         => 0,
        "industrial"        => 0,
        "metalcore"         => 0,
        "neo_metal"         => 0,
        "folk_metal"        => 0,
        "gothic_metal"      => 0,
        "progressive_metal" => 0,
        "death_metal"       => 0,
        "symphonic_metal"   => 0,
        "speed_metal"       => 0,
        "traditional_metal" => 0,
        "heavy_metal"       => 0,
        "trash_metal"       => 0,
        "extreme_metal"     => 0,
        "black_metal"       => 0,
        "doom_metal"        => 0,
        "electronic"        => 1,
        "electro"           => 2,
        "synth_pop"         => 0,
        "breakbeat"         => 0,
        "IDM"               => 0,
        "house"             => 0,
        "minimal_house"     => 0,
        "tech_house"        => 0,
        "deep_house"        => 0,
        "progressive_house" => 0,
        "garage_house"      => 0,
        "acid_house"        => 0,
        "club_house"        => 0,
        "tribal_house"      => 0,
        "techno"            => 2,
        "hardcore_techno"   => 2,
        "ambient_downtempo" => 2,
        "ambient"           => 0,
        "new_age"           => 0,
        "trip_hop"          => 0,
        "acid_jazz"         => 0,
        "chillout"          => 0,
        "experimental_electronic" => 1,
        "trance"            => 0,
        "hard_trance"       => 0,
        "progressive_trance" => 0,
        "psy_trance"        => 0,
        "dnb"               => 0,
        "hip_hop"           => 0,
        "reggae"            => 2,
        "ska"               => 2,
        "dub"               => 0,
        "jazz"              => 0,
        "easy_listening"    => 0,
        "blues"             => 0,
        "funk_soul_rnb"     => 0,
        "country_folk"      => 0,
        "folk"              => 0,
        "country"           => 2,
        "classic"           => 1,
        "misc"              => 2,
        "christmas"         => 3,
        "soundtrack"        => 3
    );

    protected $genre;


    public function __construct($genre)
    {
        $this->genre = $genre;
    }

    public function getGenre()
    {
        return $this->genre;
    }

}
