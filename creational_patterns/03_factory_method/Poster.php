<?php
require_once 'Notifier.php';

class Post extends Notifier {
    public function validateTo() : bool {
        $address = explode(',', $this->to); //assuming the address will have two parts, separated by a comma
        return count($address == 2) ? true : false;
    }

    public function sendNotification(): string {
        if ($this->validateTo() == false) {
            throw new Exception("Invalid address.");
        }

        $type = get_class($this);
        return "This is a {$type} notification to {$this->to}.";
    }
}