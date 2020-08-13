<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";
//but surely we store these in env variables, not in the code?

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

//closing tags not required in a pure php file