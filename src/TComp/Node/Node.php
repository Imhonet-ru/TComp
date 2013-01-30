<?php

namespace TComp\Node;

abstract class Node
{

    protected $add = "";

    protected $decline = 0;

    public function shouldRemoveNextNoun()
    {
        return false;
    }

    /**
     * Can be used for adding punctuation marks after nodes.
     *
     * @param string $text
     * @return Node
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

    public function declineTo($decline)
    {
        $this->decline = $decline;
    }

    /**
     * @return bool
     */
    abstract public function initialized();

}
