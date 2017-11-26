<?php
require_once 'PuzzleToy.php';

class SFPuzzleToy extends PuzzleToy {
    private $size;
    private $pictureName;

    public function __construct() {
        $this->size = rand(1, 3) * 3;
        $this->pictureName = 'San Francisco Puzzle';
    }

    public function getSize(): int {
        return $this->size;
    }

    public function getPictureName(): string {
        return $this->pictureName;
    }
}