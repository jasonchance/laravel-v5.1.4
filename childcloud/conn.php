<?php

// $link = mysqli_connect('127.0.0.1', 'root', 'root', 'new') or die('error connect!');
// mysqli_set_charset($link, "utf8");

$mysqliNew = new mysqli('127.0.0.1', 'root', 'root', 'new');

if ($mysqliNew->connect_errno) {
    printf("Connect failed: %s\n", $mysqliNew->connect_error);
    exit();
}

$mysqliNew->set_charset("utf8");


$mysqliOld = new mysqli('127.0.0.1', 'root', 'root', 'childcloud');

if ($mysqliOld->connect_errno) {
    printf("Connect failed: %s\n", $mysqliOld->connect_error);
    exit();
}

$mysqliOld->set_charset("utf8");


