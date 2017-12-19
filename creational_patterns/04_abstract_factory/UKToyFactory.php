<?php
require_once 'ToyFactory.php';
require_once 'UKMazeToy.php';
require_once 'UKPuzzleToy.php';

// The factory for producing UK toys
class UKToyFactory implements ToyFactory {
    private $location = 'UK';

    public function makeMaze() {
        return new UKMazeToy();
    }

    public function makePuzzle() {
        return new UKPuzzleToy();
    }
}