<?php

require_once "./conn.inc.php";
$email = $_POST['email'];
$pass = $_POST['pass'];
$role = $_POST['role'];

$sql = "INSERT INTO users VALUES(NULL, '$email', '$pass', '$role')";
$ret = $pdo->exec($sql);

header('location:/db.php');
