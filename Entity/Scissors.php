<?php

namespace LizardSpock\Entity;


class Scissors extends Hand
{
    public function __construct()
    {
        $this->type = Hand::SCISSORS;

        parent::__construct();
    }

    /**
     *  Initializes a hand.
     */
    public function init()
    {
        $this->inferiorHands = [
            Hand::PAPER, Hand::LIZARD
        ];
    }
}
