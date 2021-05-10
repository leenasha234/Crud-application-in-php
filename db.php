<?php
session_start();
$uri = 'localhost:3307';
$username = 'root';
$password = '';
$database ='backoffice';
$con = mysqli_connect($uri, $username, '', 'backoffice');
if(!$con){
    die("connection error");
}


