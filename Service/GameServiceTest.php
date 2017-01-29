<?php

include "/vagrant/autoload.php";

use LizardSpock\Entity\Hand;
use LizardSpock\Entity\Lizard;
use LizardSpock\Entity\Paper;
use LizardSpock\Entity\Rock;
use LizardSpock\Entity\Scissors;
use LizardSpock\Entity\Spock;
use LizardSpock\Service\GameService;


class GameServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider handProvider
     * @param $hand1
     * @param $hand2
     * @param $result
     */
    public function testBeginGameShouldReturnDesiredResults($hand1, $hand2, $result)
    {
        $gameService   = new GameService();

        $currentResult = $gameService->beginGame($hand1, $hand2);

        $this->assertEquals($result, $currentResult);
    }

    public function handProvider()
    {
        return [
            [ new Scissors(), new Scissors(), Hand::DRAW ],
            [ new Scissors(), new Paper(), Hand::VICTORY ],
            [ new Scissors(), new Rock(), Hand::LOSS ],
            [ new Scissors(), new Spock(), Hand::LOSS ],
            [ new Scissors(), new Lizard(), Hand::VICTORY ],
            [ new Paper(), new Paper(), Hand::DRAW ],
            [ new Paper(), new Scissors(), Hand::LOSS ],
            [ new Paper(), new Spock(), Hand::VICTORY ],
            [ new Paper(), new Lizard(), Hand::LOSS ],
            [ new Paper(), new Rock(), Hand::VICTORY ],
            [ new Rock(), new Rock(), Hand::DRAW ],
            [ new Rock(), new Paper(), Hand::LOSS ],
            [ new Rock(), new Scissors(), Hand::VICTORY ],
            [ new Rock(), new Spock(), Hand::LOSS ],
            [ new Rock(), new Lizard(), Hand::VICTORY ],
            [ new Spock(), new Spock(), Hand::DRAW ],
            [ new Spock(), new Rock(), Hand::VICTORY ],
            [ new Spock(), new Scissors(), Hand::VICTORY ],
            [ new Spock(), new Paper(), Hand::LOSS ],
            [ new Spock(), new Lizard(), Hand::LOSS ],
            [ new Lizard(), new Lizard(), Hand::DRAW ],
            [ new Lizard(), new Spock(), Hand::VICTORY ],
            [ new Lizard(), new Paper(), Hand::VICTORY ],
            [ new Lizard(), new Rock(), Hand::LOSS ],
            [ new Lizard(), new Scissors(), Hand::LOSS ],
        ];
    }
} 
