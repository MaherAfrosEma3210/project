<?php

$server   = 'localhost';
$username = 'root';
$password = '';
$database = 'project_voice';

$conn = new mysqli($server,$username,$password,$database);

if($conn->connect_error){
    die("Connection Failed:".$conn->connect_error);
}


