<?php
    session_start();
    if(!isset($_SESSION['auth'])) header('location:/login.php');
?>

<?php
    $pdo = new PDO(
        "mysql:host=localhost;dbname=ehtp_gi",
        'root',
        ''
    );
    $sql = "SELECT * FROM users";

    $stmt = $pdo->query($sql);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
        Bonjour <?= $_SESSION['auth']['email'] ?> 
        <hr>
        <a href="logout.php" class="btn btn-info m-2">Logout</a>
        <form action="add.php" method="post">
            <input type="text" name="email"  class="form-control mb-1 border-3">
            <input type="password" name="pass"  class="form-control border-3 mb-1">
            <select name="role" class="form-select mb-1">
                <option value="guest">Guest</option>
                <option value="admin">admin</option>
                <option value="author">Author</option>
                <option value="editor">Editor</option>
            </select>
            <button class="btn btn-success mb-5">Envoyer</button>
            
        </form>
        <table class="table table-dark table-striped table-bordered">
            <tr>
                <th>ID</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
                <th>ROLE</th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach($users as $user) : ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['password'] ?></td>
                    <td><?= $user['role'] ?></td>
                    <td><a href="/del.php?idd=<?= $user['id']?>" class="btn btn-danger">X</a></td>
                    <td><a href="/edit.php?idd=<?= $user['id']?>" class="btn btn-info">Edit</a></td>
                    
                </tr>
            <?php endforeach ?>
        </table>
        <hr class="border-3">
        <pre><?php print_r($users) ?></pre>
    </div>
</body>
</html>