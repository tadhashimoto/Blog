<?php

function ReadComment() : array
{
    $LOG_FILE_NAME = "log.txt";
    $split = "|-|";

    $linesNum = 0;
    if(file_exists($LOG_FILE_NAME))
    {
        $lines = file($LOG_FILE_NAME);
        $linesNum = count($lines);
    }
    else
    {
        $linesNum = 0;
    }

    $result = array();

    for($i = 0;$i < $linesNum;$i++)
    {
        $ary = explode($split,$lines[$i]);
        $datas = array($ary[0],$ary[1],$ary[2]);

        array_push($result,$datas);
    }

    return $result;
}