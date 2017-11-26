<?php
require_once 'NotifierFactory.php';
require_once 'Poster.php';

class CourierNotifierFactory implements NotifierFactory {
    public static function getNotifier($type, $to) {
        if(empty($type)) {
            throw new Exception('No notifier type passed.');
        }

        switch ($type) {
            case 'Post':
                return new Post($to);
                break;
            default: 
                throw new Exception("Invalid notifier.");
                break;
        }
    }
}