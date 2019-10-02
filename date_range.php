<?php

// if Using Zend Framework 2
require_once 'OX3_Api_Client2.php';

$uri      = 'http://yourdomain-ui.openx.net';
$email    = 'your@email.com';
$password = 'your_sso_password';
$key      = 'your_consumer_key';
$secret   = 'your_consumer_secret';
$realm    = 'your_realm';

// if Using Zend Framework 2
$client = new OX3_API_Client2($uri, $email, $password, $key, $secret, $realm);

$myJson = array(
        'attributes' => array(array('id' => 'publisherSiteId'), array('id' => 'hour')
           ),
        'metrics' => array(array('id' => 'marketRequests'), array('id' => 'marketImpressions'))
);

$encoded_json = json_encode($myJson);

$report = $client->post('/date-range/', $encoded_json, true);

$getBodyData = $report->getBody();

$prettyData = json_encode(json_decode($getBodyData), JSON_PRETTY_PRINT);

echo $prettyData;

?>