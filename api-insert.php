<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');
$data = json_decode(file_get_contents('php://input'), true);
$name = $data['name'];
$age = $data['age'];
$city = $data['city'];

include "config.php";

if($sql = $conn->query("INSERT INTO users(name, age, city) values('{$name}', {$age}, '{$city}' )")){
echo json_encode(array('message' => 'Data inserted', 'status' => true));
}else{
    echo json_encode(array('message'=>'No Data Inserted', 'status'=>false));
}