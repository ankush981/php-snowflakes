<?php
require_once 'Notifier.php';

/**
 * Class for email notifications
 */

 class Email extends Notifier {
     private $from;

     public function __construct($to, $from) {
        parent::__construct($to);

        $this->from = isset($from) ? $from : 'Anonymous';
     }

     public function validateTo() : bool {
         $isEmail = filter_var($this->to, FILTER_VALIDATE_EMAIL);
         return $isEmail ? true : false;
     }

     public function sendNotification() : string {
         if($this->validateTo() == false) {
            throw new Exception('Invalid email address.');
         }

         $notificationType = get_class($this);
         return "This is a {$notificationType} to {$this->to} from {$this->from}.";
     }
 }