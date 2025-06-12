<?php
    $id = $_GET['idd'];
    $pdo = new PDO(
        "mysql:host=localhost;dbname=ehtp_gi",
        'root',
        ''
    );
    $sql = "DELETE  FROM users WHERE id=$id";

    $stmt = $pdo->exec($sql);
    
    header('location:/db.php')

?>
