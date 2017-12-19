<?php
/**
 * The abstract product class in the Abstract Factory pattern
 */

abstract class Toy {
    abstract public function getSize() : int;
    abstract public function getPictureName() : string;
}