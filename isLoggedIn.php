<?php
// Allow requests from all origins (not recommended for production)
header("Access-Control-Allow-Origin: *");

// Allow specific headers and methods
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Access-Control-Allow-Methods: POST, GET");

// Retrieve data sent from Axios POST request
$data = json_decode(file_get_contents("php://input"));

// Perform some operation (for example, echoing the received data)
$isLoggedIn = isset($_SESSION['user']) ? 1 : 0;

echo $isLoggedIn . " " . $data->message;
?>