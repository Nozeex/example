<?php
$connect = mysqli_connect(
    "127.0.0.1",
    "root",
    "",
    "bd"
);
if(!$connect){
    die('ne ale');
}