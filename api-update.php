<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);
include "config.php";
foreach ($data as $row){
$id = $row['id'];
$name = $row['name'];
$age = $row['age'];
$city = $row['city'];


if($sql = $conn->query("UPDATE users SET name = '{$name}', age = {$age}, city='{$city}' WHERE id = {$id}")){
    echo json_encode(array('message' => 'Data Updated Successfully', 'status' => true));
}else{
    echo json_encode(array('message' => 'Error Updating Data', 'status' => false));
}
}


