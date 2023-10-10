<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: PUT, POST, GET, DELETE,HEAD , PATCH");
header("Content-type: application/json; charset=utf-8");

require_once __DIR__ . '/connect.php';
require_once __DIR__ . '/core.php';

$method = $_SERVER['REQUEST_METHOD'];
$rout = $_GET['rout'] ?? '';

$params = explode('/', $rout);

$type = $params[0];
$id = $params[1] ?? '';

//print_r($params);
//print_r($_SERVER['REQUEST_METHOD']);

if  ($method === 'GET')
{
    if ($type === '')
{
    getUsers($connect);

        http_response_code(200);
        echo json_encode(array('message'=>'darova'));
   }
 else {
        http_response_code(404);
        echo json_encode(array("message"=>"info not found"));
    }
}

return;