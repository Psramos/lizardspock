<?php

namespace LizardSpock\Entity;


class Rock extends Hand
{
    public function __construct()
    {
        $this->type = Hand::ROCK;

        parent::__construct();
    }

    /**
     *  Initializes a hand.
     */
    public function init()
    {
        $this->inferiorHands = [
            Hand::SCISSORS, Hand::LIZARD
        ];
    }
}
