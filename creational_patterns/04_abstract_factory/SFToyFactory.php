<?php
require_once 'ToyFactory.php';
require_once 'SFMazeToy.php';
require_once 'SFPuzzleToy.php';

// The factory for producing Sab Francisco toys
class SFToyFactory implements ToyFactory {
    private $location = 'San Francisco';

    public function makeMaze() {
        return new SFMazeToy();
    }

    public function makePuzzle() {
        return new SFPuzzleToy();
    }
}