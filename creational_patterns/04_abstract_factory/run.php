<?php
/**
 * The Abstract Factory pattern has five types of entities:
 * 1) Abstract Factory classes
 * 2) Concrete Factory classes
 * 3) Abstract Product classes
 * 4) Concrete Product classes
 * 5) Client classes
 * 
 * In this example, Toy.php is the abstract product class, while the
 * ToyFactory.php is the abstract factory class.
 * 
 * Look around and see the explosion of classes. This is symptomatic
 * in the Abstract Factory pattern.
 */

require_once 'ToyFactory.php';
require_once 'Toy.php';
require_once 'MazeToy.php';
require_once 'PuzzleToy.php';

require_once 'SFToyFactory.php';
require_once 'SFMazeToy.php';
require_once 'SFPuzzleToy.php';

$sfFactory = new SFToyFactory();
var_dump($sfFactory->makeMaze());
var_dump($sfFactory->makePuzzle());

require_once 'UKToyFactory.php';
require_once 'UKMazeToy.php';
require_once 'UKPuzzleToy.php';

$ukFactory = new UKToyFactory();
var_dump($ukFactory->makeMaze());
var_dump($ukFactory->makePuzzle());