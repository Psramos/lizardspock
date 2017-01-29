<?php

namespace LizardSpock\Entity;


class Paper extends Hand
{
    public function __construct()
    {
        $this->type = Hand::PAPER;

        parent::__construct();
    }

    /**
     *  Initializes a hand.
     */
    public function init()
    {
        $this->inferiorHands = [
            Hand::ROCK, Hand::SPOCK
        ];
    }
}
