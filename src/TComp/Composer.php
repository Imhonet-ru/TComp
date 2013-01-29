<?php

namespace TComp;

use TComp\Node\Node as BaseNode;

class TComp_Composer
{

    /**
     * @var \TComp\Node\Node[]
     */
    protected $nodes = array();


    public function addNode(BaseNode $node)
    {
        $this->nodes[] = $node;
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

        return ucfirst(implode(" ", $text));
    }

}
