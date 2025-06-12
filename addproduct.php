<?php

session_start();
$product = $_GET['product'];
if(!isset($_SESSION['panier'])) $_SESSION['panier'] = [];
$_SESSION['panier'][] = $product;

header("location: /session.php");