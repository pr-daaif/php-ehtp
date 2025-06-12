<?php

require_once "./conn.inc.php";
$id = $_GET['idd'];
$sql = "SELECT * FROM users WHERE id=$id";


$stmt = $pdo->query($sql);

$user = $stmt->fetch(PDO::FETCH_OBJ);

if (!$user) header('location:/db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.min.css">
    <title>Users</title>
</head>

<body>
    <div class="container mb-3">
        <h1>Users List</h1>
        <form action="save.php" method="post">
            <input type="hidden" name="idd" value="<?= $id ?>">
            <input type="text" name="email" class="form-control mb-1 border-3"
            value="<?= $user->email?>"
            >
            <input type="password" name="pass" class="form-control border-3 mb-1"
            value="<?= $user->password?>"
            >
            <select name="role" class="form-select mb-1">
                <option value="guest" 
                <?= $user->role === 'guest' ? 'selected' : '' ?>
                >Guest</option>
                <option value="admin"
                
                <?= $user->role === 'admin' ? 'selected' : '' ?>
                >admin</option>
                <option value="author" 
                
                <?= $user->role === 'author' ? 'selected' : '' ?>
                >Author</option>
                <option value="editor"
                
                <?= $user->role === 'editor' ? 'selected' : '' ?>
                >Editor</option>
            </select>
            <button class="btn btn-success mb-5">Envoyer</button>

        </form>
    </div>
</body>

</html>