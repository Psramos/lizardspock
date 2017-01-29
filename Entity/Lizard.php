<?php

namespace LizardSpock\Entity;


class Lizard extends Hand
{
    public function __construct()
    {
        $this->type = Hand::LIZARD;

        parent::__construct();
    }

    /**
     *  Initializes a hand.
     */
    protected function init()
    {
        $this->inferiorHands = [
            Hand::PAPER, Hand::SPOCK
        ];
    }
}
