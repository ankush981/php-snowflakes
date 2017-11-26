<?php
require_once 'MazeToy.php';

class UKMazeToy extends MazeToy {
    private $size;
    private $picureName;

    public function __construct() {
        $this->size = 9;
        $this->pictureName = "London Maze";
    }

    public function getSize(): int {
        return $this->size;
    }

    public function getPictureName(): string {
        return $this->pictureName;
    }
}