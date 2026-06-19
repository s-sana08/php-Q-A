<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Method: GET");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Method, Authorization , X-Requested-With");

$data = json_decode(file_get_contents('php://input'),true);

$std_name = $data['sname'];

require_once('config.php');






/*
Q:What is REST APIs?
A:“I design REST APIs using proper HTTP methods, status codes, validation, and security practices like authentication and rate limiting.”

-one line ans:
-REST API = Client-server communication using HTTP methods
*/
?>