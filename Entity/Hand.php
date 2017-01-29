<?php

namespace LizardSpock\Entity;

abstract class Hand
{
    const VICTORY  = 0;

    const LOSS     = 1;

    const DRAW     = 2;

    const SCISSORS = 'Scissors';

    const PAPER    = 'Paper';

    const ROCK     = 'Rock';

    const LIZARD   = 'Lizard';

    const SPOCK    = 'Spock';

    /**
     * @var string
     */
    protected  $type;

    /**
     * Array of hands that can be beaten.
     *
     * @var array
     */
    protected $inferiorHands;

    public  function __construct()
    {
        $this->inferiorHands = [];

        $this->init();
    }

    public function match(Hand $hand)
    {
        if (in_array($hand->type, $this->inferiorHands)) {
            return self::VICTORY;
        }

        if ($this->type === $hand->type) {
            return self::DRAW;
        }

        return self::LOSS;
    }

    abstract protected function init();
}
