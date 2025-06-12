<?php

require_once 'conn.inc.php';
$id = $_POST['idd'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$role = $_POST['role'];

$sql = "UPDATE users SET email='$email', password='$pass', role='$role' WHERE id=$id";

$pdo->exec($sql);
header('location:/db.php');