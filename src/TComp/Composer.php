<?php

namespace TComp;

use TComp\Node\Node as BaseNode;

class Composer
{

    /**
     * @var \TComp\Node\Node[]
     */
    protected $nodes = array();


    public function addNode(BaseNode $node)
    {
        $this->nodes[] = $node;
        return $this;
    }

    public function getNodes()
    {
        return $this->nodes;
    }

    public function compose()
    {
        $text = array();

        $removeNoun = false;
        foreach ($this->nodes as $node) {
            if ($node->initialized() === false) {
                continue;
            }

            if ($removeNoun && $node instanceof Node\Noun) {
                $removeNoun = false;
                continue;
            }

            $removeNoun = $node->shouldRemoveNextNoun();

            if ($node instanceof Node\WordSequence) {
                $piece = $node->getText();
            } elseif ($node instanceof Node\PluralizeableAdjectable) {
                $piece = $node->getPluralizedAdjective();
            } elseif ($node instanceof Node\Adjectable) {
                $piece = $node->getAdjective();
            } else {
                $piece = "# unrecognized node type #";
            }

            $text[] = $piece . $node->getAddedText();
        }

        $this->nodes = array();

        return ucfirst(implode(" ", $text));
    }

}
