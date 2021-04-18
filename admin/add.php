<?php
    session_start();

    if(isset($_POST['submit'])) {
        include('../config.php');
        $name = $_POST['name'];
        $logo = $_FILES['logo']['name'];
        $text = $_POST['text'];
        $file = "../img/upload/".$_FILES['logo']['name'];
        move_uploaded_file($_FILES['logo']['tmp_name'], $file);
        $result = $db->prepare("INSERT INTO items (name, logo, text) VALUES (:name, :logo, :text)");
        $result->execute([':name' => $name,':logo' => $logo, ':text' => $text]);
        $_SESSION['message'] = "Жаңа тақырып сәтті қосылды!";
        header('Location: index.php');
    } else {
        $_SESSION['message'] = "Қате!";
        header('Location: index.php');
    }
?>