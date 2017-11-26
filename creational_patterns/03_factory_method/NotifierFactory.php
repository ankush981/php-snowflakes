<?php

/**
 * In the Factory Method, the factory is not a simple class (remember the
 * Simple Factory pattern?) but a method (that is defined by an interface).
 * We can then have different factory classes that obey that interface and 
 * produce different types of objects. 
 * 
 * Also check out the run.php
 */

interface NotifierFactory {
    public static function getNotifier($notifier, $to);
}