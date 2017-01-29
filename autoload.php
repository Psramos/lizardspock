<?php

function autoload() {
    require_once("Entity/Hand.php");
    require_once("Entity/Scissors.php");
    require_once("Entity/Paper.php");
    require_once("Entity/Rock.php");
    require_once("Entity/Spock.php");
    require_once("Entity/Lizard.php");
    require_once("Service/GameService.php");
}

spl_autoload_register('autoload');
