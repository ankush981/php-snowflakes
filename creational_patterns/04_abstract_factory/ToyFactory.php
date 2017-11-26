<?php

/**
 * The toy factory interface.
 * 
 * The abstract factory class (interface) in the Abstract Factory pattern
 *
 * 
 * In the Factory pattern, we produced implementations of a particular 
 * interface (for example, notifier was our interface and e-mail, SMS 
 * and post were our implementations). With an Abstract Factory pattern, 
 * we will create implementations of a factory interface, with every 
 * factory knowing how to create their products.
 * 
 */

// In this example, we create factories for a toy shop, where each shop
// knows how to create toys for its own location.

interface ToyFactory {
    function makeMaze();
    function makePuzzle();
}