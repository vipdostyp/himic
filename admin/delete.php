<?php
    session_start();
    include('../config.php');
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $result = $db->query("DELETE FROM items WHERE id = :id");
        $result->execute([':id' => $id]);
    }
    // $row = $result->fetchAll(PDO::FETCH_ASSOC);
    // echo '<pre>';
    // var_dump($row);
    // echo '<pre>';
    if(!$result === false) {
        $_SESSION['message'] = "Тақырып сәтті өшірілді!";
        header('Location: index.php');
    } else {
        echo "Қате!";
    }
    require_once('./header.php');
?>