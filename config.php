<?php
    define('DB_PATH', $_SERVER['DOCUMENT_ROOT'] . '/himic.db');
    $db = new PDO('sqlite:'.DB_PATH);
?>
