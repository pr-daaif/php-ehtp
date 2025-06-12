<?php
session_start();
require_once('conn.inc.php');

$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM users WHERE email=? AND password=?";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(1, $email, PDO::PARAM_STR);
$stmt->bindValue(2, $pass, PDO::PARAM_STR);

$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if(!$user) 
    header('location:/login.php');
else {
    $_SESSION['auth'] = ['email' => $user['email'], 'role' => $user['role']];
    header('location:/db.php');
}

