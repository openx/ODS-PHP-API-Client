<?php

require_once 'OX_ODS_API.php';

$uri      = 'http://myopenx-ui.com';
$email    = 'my_email';
$password = 'my_password';
$key      = 'my_consumer_key';
$secret   = 'my_consumer_secret';
$realm    = 'my_realm';

$client = new OX_ODS_API($uri, $email, $password, $key, $secret, $realm);

$report = $client->get('/report/fields');

$getBodyData = $report->getBody();

$prettyData = json_encode(json_decode($getBodyData), JSON_PRETTY_PRINT);

echo $prettyData;

?>
