<?php

/**
 * The class from which Email and SMS classes derive
 */

abstract class Notifier {
    protected $to;

    public function __construct(string $to) {
        $this->to = $to;
    }

    abstract public function validateTo(): bool;
    abstract public function sendNotification(): string;
}