<?php
session_start();


?>

<h1>Ajouter un produit</h1>
<form action="addproduct.php">
    nom du produit : <input type="text" name="product">
    <br>
    <button>Ajouter</button>
</form>
<hr>
<pre><?php print_r($_SESSION) ?></pre>