<?php

header('Content-Type: application/json');

require "CommentWriting.php";

$name = $_POST["name"];
$message = $_POST["message"];

WriteComment($name,$message);

$ary = array("name" => "testUserName");

echo json_encode($ary);