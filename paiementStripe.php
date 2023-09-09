<?php




ini_set('display_errors',1);

session_start();




require './vendor/autoload.php';
require './classes/StripePayment.php';



$payment = new StripePayment("sk_test_51LAWbZEgFncxAQhszz2N6yFTBN2Ms8BRn3bCddOTM71EohCoUpfJnf42w9f1ogXxTZ9bdzBVCgPmWZyR1LwIC4z600qymZUQYy");

$payment->startPayment(json_decode($_POST['test'],true));



?>
