<?php

require_once './piplapis/search.php';

$email = $_POST["name"];

$configuration = new PiplApi_SearchRequestConfiguration();
$configuration->api_key = 'sample54lqucehdxn7qwz7l1';

$request = new PiplApi_SearchAPIRequest(array('email' => $email,
'first_name' => 'Clark',
'last_name' => 'Kent'), $configuration);

try {
    $response = $request->send();
} catch (PiplApi_SearchAPIError $e) {
    print $e->getMessage();
}

?>
