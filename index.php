<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri);

// RYKARD
$quotes = ['Hmm... Very well.', 
            'You...', 
            'Join the Serpent King, as family... ', 
            'Together, we will devour the very gods!', 
            'Now, we can devour the gods, TOGETHAA!', 
            'No one will hold me captive.', 
            'A serpent never dies.', 
            'Ha ha ha...'];

$selectionNum = array_rand($quotes);

if(!is_null($selectionNum)) {
    $response = array("quote" => $quotes[$selectionNum]);

	http_response_code(200);
	echo json_encode($response);
}

else {
	http_response_code(404);
	echo json_encode(
		array("message" => "No quotes found.")
	);
}
