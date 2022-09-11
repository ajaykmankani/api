<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin');
include "config.php";
$data = json_decode(file_get_contents('php://input'), true);

$student_id = $data['sid'];

$sql = $conn->query("SELECT * FROM users WHERE id = $student_id");

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

if(count($result)){
echo json_encode($result);
}else{
    echo json_encode(array('message'=>'No Record Found', 'status'=>false));
}