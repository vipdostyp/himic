<?php
    define('DB_PATH', $_SERVER['DOCUMENT_ROOT'] . '/alina/himic.db');
    $db = new PDO('sqlite:'.DB_PATH);
?>