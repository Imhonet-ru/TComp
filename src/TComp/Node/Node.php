<?php

namespace TComp\Node;

abstract class Node
{

    protected $add = "";

    public function shouldRemoveNextNoun()
    {
        return false;
    }

    /**
     * Can be used for adding punctuation marks after nodes.
     *
     * @param string $text
     */
    public function addText($text)
    {
        $this->add = $text;
        return $this;
    }

    public function getAddedText()
    {
        return $this->add;
    }

    /**
     * @return bool
     */
    abstract public function initialized();

}
