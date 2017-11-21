<?php

/**
 * The Simple Factory design pattern is a subset of the Factory Method pattern.
 * It creates objects through a single factory.
 * 
 */

class NotifierFactory
{
    public static function getNotifier($notifier, $to)
    {
        if (empty($notifier)) {
            throw new Exception("No notifier passed.");
        }

        switch ($notifier) {
            case 'SMS':
                return new SMS($to);
                break;
            case 'Email':
                return new Email($to, 'Simpleton');
                break;
            default:
                throw new Exception("Notifier invalid.");
                break;
        }
    }
}

/**
 * Much ado about nothing? Perhaps, but that's all there's to the Simple
 * Factory pattern. A single (simple) class that produces the objects you
 * need.
 */