<?php
    if(isset($_FILES['photo']) && $_FILES['photo']['error'] === 0) {
        $name = $_FILES['photo']['name'];
        $tmp = $_FILES['photo']['tmp_name'];
        move_uploaded_file($tmp, './uploads/' . $name);
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tester PHP</title>
<link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.min.css">
</head>

<body>
   <div class="container mt-3">
     <h1>Bonjour EHTP</h1>
     <?php 
     echo "<textarea style='width:100%'>"; 
     readfile('./uploads/' . $name);
     echo "</textarea>"; ?>
     <img src="<?php echo './uploads/' . $name ?>" alt="">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" class="form-control mb-2 border" placeholder="Email" name="emaaaail">
        <input type="file" name="photo" id="" class="form-control">
        <button class="btn btn-primary">Envoyer</button>
    </form>
    <hr class="border-4">
    <h6>GET</h6>
    <pre><?php print_r($_GET) ?></pre>
    <h6>POST</h6>
    <pre><?php print_r($_POST) ?></pre>
    <h6>FILES</h6>
    <pre><?php print_r($_FILES) ?></pre>
   </div>
</body>

</html>