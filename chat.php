<?php

$LOG_FILE_NAME = "log.txt";

if (!file_exists($LOG_FILE_NAME)) {
    exit("ログファイルが見つかりません。");
}

$fp = fopen($LOG_FILE_NAME, "a") or exit($LOG_FILE_NAME."が開けません。");

fwrite($fp, "hello");

echo $LOG_FILE_NAME." ok";
