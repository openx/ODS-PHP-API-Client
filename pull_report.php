<?php

require_once 'OX_ODS_API.php';

$uri      = 'http://myopenx-ui.com';
$email    = 'my_email';
$password = 'my_password';
$key      = 'my_consumer_key';
$secret   = 'my_consumer_secret';
$realm    = 'my_realm';

$client = new OX_ODS_API($uri, $email, $password, $key, $secret, $realm);

$myJson = array(
	'startDate' => '2019-09-20T00:00:01Z',
	'endDate' => '2019-09-20T23:59:01Z',
	'attributes' => array(array('id' => 'publisherSiteId'), array('id' => 'hour')
	   ),
	'metrics' => array(array('id' => 'marketRequests'), array('id' => 'marketImpressions'))
);

$encoded_json = json_encode($myJson);

$report = $client->post('/report/', $encoded_json, true);

$getBodyData = $report->getBody();

$prettyData = json_encode(json_decode($getBodyData), JSON_PRETTY_PRINT);

echo $prettyData;

?>
