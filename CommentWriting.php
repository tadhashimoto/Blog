<?php

function WriteComment(string $name,string $comment)
{
    $LOG_FILE_NAME = "log.txt";
    // 区切りのための文字列
    $split = "|-|";

    if($name == ""){
        $name = "noname";
    }

    date_default_timezone_set("Asia/Tokyo");
    $date = date("Y/m/d H:i:s");

    $fp = fopen($LOG_FILE_NAME, "a") or exit($LOG_FILE_NAME."が開けません");

    fwrite($fp,$name.$split.$comment.$split.$date."\n");
}
?>