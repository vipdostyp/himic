<?php
    define('DB_PATH', $_SERVER['DOCUMENT_ROOT'] . './himic.db');
    $db = new PDO('sqlite:himic.db');
?>
