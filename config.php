<?php

// $db_name = "mysql:host=localhost;dbname=api";
// $username = "root";
// $password = "";

// $conn = new PDO($db_name,$username,$password);

// $sql = $conn->query("SELECT * FROM users" );

// $result = $sql->fetchAll(PDO::FETCH_OBJ);

// echo "{$result->name} <br>";
// // while($row = $sql->fetch(PDO::FETCH_OBJ)){
// //     echo "{$row->name} <br>";
// // };


$db_name = "mysql:host=localhost;dbname=api";
$username = "root";
$password ="";

$conn = new PDO($db_name, $username, $password);
