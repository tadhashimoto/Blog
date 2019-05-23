<?php

header('Content-Type: application/json');

require "CommentWriting.php";
require "CommentReading.php";

$name = $_POST["name"];
$message = $_POST["message"];

WriteComment($name,$message);

$result = ReadComment();

echo json_encode($result);