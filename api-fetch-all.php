<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin');
include "config.php";

$sql = $conn->query("SELECT * FROM users");

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

if(count($result)){
echo json_encode($result);
}else{
    echo json_encode(array('message'=>'No Record Found', 'status'=>false));
}