<?php

namespace LizardSpock\Entity;


class Spock extends Hand
{
    public function __construct()
    {
        $this->type = Hand::SPOCK;

        parent::__construct();
    }

    /**
     *  Initializes a hand.
     */
    public function init()
    {
        $this->inferiorHands = [
            Hand::ROCK, Hand::SCISSORS
        ];
    }
}
