<?php

namespace TComp\Node;

class WordSequence extends Node
    implements BasicTextNode
{

    private $text;


    public function __construct($text)
    {
        $this->text = $text;
    }

    public function getText()
    {
        return $this->text;
    }

    public function initialized()
    {
        return !empty($this->text);
    }

}
