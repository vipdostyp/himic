<?php
    //session_start();
    //include('config.php');
   // $result = $db->query("SELECT * FROM items");
    //$row = $result->fetchAll(PDO::FETCH_ASSOC);
echo $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="./img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon//favicon-16x16.png">
    <link rel="manifest" href="./img/favicon//site.webmanifest">
    <link rel="mask-icon" href="./img/favicon//safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Alert -->
    <link rel="stylesheet" href="./css/sweetalert2.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Химия</title>
</head>
<body>
    <header>
        <a href="/">
            <div class="header">
                <img src="./img/logo.png" alt="">
                <span>Химия</span>
            </div>
        </a>
    </header>
    <section>
        <div class="wrapper">
            <div class="box">
            <?php
                foreach ($row as $row) {
                    ?>
                    <a href="item.php?id=<?php echo $row['id']; ?>">
                        <div class="card">
                            <div class="card_item">
                                <div class="card_logo">
                                    <img src="img/upload/<?php echo $row['logo']; ?>" alt="<?php echo $row['logo']; ?>">
                                </div>
                                <div class="card_title"><?php echo $row['name']; ?></div>
                            </div>
                        </div>
                    </a>
                    <?php
                };
            ?>
            </div>
        </div>
    </section>
    <footer>
        <a href="/">
            <div class="footer">
                <img src="./img/logo.png" alt="">
                <span>Химия</span>
            </div>
        </a>
    </footer>
    <script src="./js/sweetalert2.all.min.js"></script>
    <?php if(isset($_SESSION['message'])) {
        $message = $_SESSION['message'];
        ?>
        <script>
            Swal.fire("<?php echo $message; ?>");
        </script>
        <?php
        unset($_SESSION['message']);
    } ?>
</body>
</html>
