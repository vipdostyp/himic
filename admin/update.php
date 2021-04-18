<?php
    session_start();

    if(isset($_POST['submit'])) {
        include('../config.php');

        $id = $_POST['id'];
        $name = $_POST['name'];
        $text = $_POST['text'];
        $result = $db->prepare("UPDATE items SET name = :name, text = :text WHERE id = :id");
        $result->execute([':name' => $name, ':text' => $text, ':id' => $id]);
        $_SESSION['message'] = "Cәтті жаңартылды!";
        header('Location: index.php');
    } else {
        $_SESSION['message'] = "Қате!";
        header('Location: index.php');
    }
?>