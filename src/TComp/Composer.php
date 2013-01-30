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

    protected $capitalizeFirstChar = true;

    public function addNode(BaseNode $node)
    {
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

            if ($node instanceof Node\BasicTextNode) {
                $piece = $node->getText();
            } elseif ($node instanceof Node\PluralizeableAdjectable) {
                $piece = $node->getPluralizedAdjective();
            } elseif ($node instanceof Node\Adjectable) {
                $piece = $node->getAdjective();
            } elseif ($node instanceof Node\Nounable) {
                $piece = $node->getNoun();
            } else {
                $piece = "# unrecognized node type \"" . get_class($node) . "\" #";
            }

            $text[] = $piece . $node->getAddedText();
        }

        $this->nodes = array();
        $this->lastNode = null;

        $text = implode(" ", $text);

        if ($this->capitalizeFirstChar) {
            $text = mb_strtoupper(mb_substr($text, 0, 1)) . mb_substr($text, 1);
        }

        return $text;
    }

    public function capitalizeFirstChar($capitalize = true)
    {
        $this->capitalizeFirstChar = $capitalize;
        return $this;
    }

}
