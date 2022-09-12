<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$search_value = isset($_GET['search']) ? $_GET['search'] : die();

include "config.php";

if($sql = $conn->query("SELECT * FROM users WHERE name LIKE '%{$search_value}%'")){
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result);
}else{
    echo json_encode(array("message"=> "No Data Found", "status"=> false ));
}
