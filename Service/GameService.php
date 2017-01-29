<?php

namespace LizardSpock\Service;

use LizardSpock\Entity\Hand;

/**
 * Class GameService
 *
 * @package LizardSpock\Service
 */
class GameService
{
    public function beginGame(Hand $hand1, Hand $hand2)
    {
        return $hand1->match($hand2);
    }
} 
