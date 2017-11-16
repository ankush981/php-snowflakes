<?php

/**
 * Although many people like to argue that singletons have their use cases,
 * singletons are bad in almost all cases. That's because they:
 * a) Obfuscate dependency chain
 * b) Are hard (impossible?) to test
 * c) Violate Single Responsibility Principle by creating themselves
 */

// Here's how a Singleton might be implemented (note the clever use of 'static'!)

class Singleton {
    private static $instance;

    public static function getInstance() {
        if (null === static::$instance) {
            static::$instance = new static(); // late static binding of sorts!
        }

        return static::$instance;
    }

    protected function __construct() {
        /* Do whatever you want here*/
    }
}