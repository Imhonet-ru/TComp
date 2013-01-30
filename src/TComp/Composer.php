<?php

namespace TComp;

use TComp\Node\Node as BaseNode;

class Composer
{

    /**
     * @var \TComp\Node\Node[]
     */
    protected $nodes = array();

    /**
     * @var \TComp\Node\Node
     */
    protected $lastNode;

    public function addNode(BaseNode $node)
    {
        if ($this->lastNode !== null && $node instanceof Node\Declinable) {
            $this->lastNode->declineTo($node->getDeclination());
        }

        $this->nodes[] = $this->lastNode = $node;
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
            } elseif ($node instanceof Node\Nounable) {
                $piece = $node->getNoun();
            } else {
                $piece = "# unrecognized node type #";
            }

            $text[] = $piece . $node->getAddedText();
        }

        $this->nodes = array();
        $this->lastNode = null;

        return ucfirst(implode(" ", $text));
    }

}
