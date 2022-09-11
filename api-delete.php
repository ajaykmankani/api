<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$data = json_decode(file_get_contents('php://input'), true);

$student_id = $data['id'];

include "config.php";

if($sql = $conn->query("DELETE FROM users WHERE id = {$student_id}")){
    echo json_encode(array("message"=>"Data Deleted Successfully", "status"=>true));
}else{
    echo json_encode(array("message"=>"Error Deleting Data", "status"=> false));
}


