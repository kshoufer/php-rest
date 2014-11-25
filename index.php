<?php

header("Content-Type:application/json");
include("functions.php");

if (!empty($_GET['name'])) {
	//process request
	$name = $_GET['name'];
	$price = get_price($name);

	if (empty($price)) {
		deliver_response(200, "book not found", NULL);
	}
	else {
		deliver_response(200, "book found", $price);
	}
}
else
{
	deliver_response(400, "invalid request", NULL);
}

function deliver_response($status, $status_message, $data) {
	$response['status'] = $status;
	$response['$status_message'] = $status_message;
	$response['price'] = $data;

	$json_response = json_encode($response);
	echo $json_response;
}

?>