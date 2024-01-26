<?php

require_once('../vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();

use Portfolio\View\ViewPortfolio;

$viewPortfolio = new ViewPortfolio();

$viewPortfolio->Portfolio_Header();
?>