<?php
require_once 'OX3_Api_Client2.php';

$uri      = 'http://myopenx-ui.com';
$email    = 'my_email';
$password = 'my_password';
$key      = 'my_consumer_key';
$secret   = 'my_consumer_secret';
$realm    = 'my_realm';

$client = new OX3_API_Client2($uri, $email, $password, $key, $secret, $realm);

// An example for creating an AD Unit
$pub_acct_uid = 'publisher_account_uid';

$adunit_query = Array(

'site_uid'=> 'publisher_site_uid', 
	'name'=>'my_adunit_name', 
	'status'=>'Active',
	'type_full'=>'adunit.mobile', 
	'primary_size'=>'728x90',
	'presentation_format' => 'display',
	'content_type' => 'UNCLASSIFIED',
	'tag_type' => 'json'
);
print_r(json_encode($adunit_query));

$encoded = $client->post('/adunit/', $adunit_query);
print_r($encoded);
$result = json_decode($encoded->getBody(), true);
print_r($result);

?>
