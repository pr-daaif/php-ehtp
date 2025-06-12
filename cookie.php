<?php

$value = isset($_COOKIE['counter']) ? $_COOKIE['counter'] + 1 : 1;
setcookie('counter', $value,time() + 365 * 24 * 60 * 60);



?>

<hr>
<pre><?php print_r($_COOKIE) ?></pre>