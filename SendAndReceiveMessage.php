<?php
  header('Content-Type: applicaton/json');

  $LOG_FILE_NAME = "log.txt";
  // 区切りのための文字列
  $split = "|-|";

  // 名前を格納する変数
  $name = $_POST["name"];
  if ($name == "") {
      $name = "noname";
  }

  // メッセージを格納する変数
  $message = $_POST["message"];

  date_default_timezone_set("Asia/Tokyo");
  $date = date("Y/m/d H:i:s");

  $fp = fopen($LOG_FILE_NAME, "a") or exit($LOG_FILE_NAME."が開けません");
  fwrite($fp, $name.$split.$message.$split.$date."\n");

  if (!file_exists($LOG_FILE_NAME)) {
      $linesNum = 0;
  } else {
      $lines = file($LOG_FILE_NAME);
      $linesNum = count($lines);
  }

  $results = array();

  for ($i = 0; $i < $linesNum;$i++) {
      $array = explode($split, $lines[$i]);
      $messageData = array($array[0],$array[1],$array[2]);

      array_push($results, $messageData);
  }

  echo json_encode($results);
