<?php
require_once 'ElectronicNotifierFactory.php';

/**
 * Unlike the Simple Factory pattern, notice that we are no more relying
 * on a single class, but calling different classes that we know follow
 * the same interface. The advantage is that this way, we can keep adding 
 * more factories without having to modify the original class. That's a
 * BIG advantage as far as the Open/Closed principle is concerned. Note that
 * if we were to do this via the Simple Factory pattern, we would end up
 * having to modify the original class, and then we'd have the problem of 
 * having to communiate the extra possibility to all the clients using
 * that library.
 */

$mobile = ElectronicNotifierFactory::getNotifier("SMS", "07111111111");
echo $mobile->sendNotification() . PHP_EOL;

$email = ElectronicNotifierFactory::getNotifier("Email", "test@example.com");
echo $email->sendNotification() . PHP_EOL;

/**
 * And here's an example use case -- adding another type of notifier
 */

require_once 'CourierNotifierFactory.php';

$post = CourierNotifierFactory::getNotifier("Post", "13 Friday Street, SF1S 3ZZ");
echo $post->sendNotification() . PHP_EOL;

/**
 * While the textbooks tout this pattern for upholding the sanctity of the
 * Open/Closed principle, they don't say what would happen if we wanted to
 * add a new type of electronic notifier, say, Socket notifications. Could
 * this be symptomatic of the underlying problem that has causing a gradual
 * shift from Object Oriented programming?
 */