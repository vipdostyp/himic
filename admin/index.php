<?php
    session_start();
    include('../config.php');
    $result = $db->query("SELECT * FROM items");
    $row = $result->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="../img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon//favicon-16x16.png">
    <link rel="manifest" href="../img/favicon//site.webmanifest">
    <link rel="mask-icon" href="../img/favicon//safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Alert -->
    <link rel="stylesheet" href="../css/sweetalert2.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Футер */
        header, footer {
            min-height: 10vh;
            height: 50px;
            width: 100%;
        }
        header a, footer a {
            text-decoration: none;
            color: inherit;
        }
        header a:hover, footer a:hover {
            text-decoration: none;
            color: inherit;
        }
        .header, .footer {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .header img, .footer img {
            margin-right: 10px;
            line-height: 30px;
            height: 30px;
        }
        .header span, .footer span {
            font-weight: 600;
            font-size: 20px;
            color: #2c3d63;
        }
    </style>
    <title>Химия</title>
</head>
<body style="background-color: #7dc9e7;">
    <header>
        <a href="../">
            <div class="header">
                <img src="../img/logo.png" alt="">
                <span>Химия</span>
            </div>
        </a>
    </header>
    <section class="content">
        <div class="container-fluid">
            <div class="card">
            <div class="card-body p-0">
                <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 10%">
                            <h6 class="font-weight-bold">ID</h6>
                        </th>
                        <th style="text-align:center">
                            <h6 class="font-weight-bold">Тақырып</h6>
                        </th>
                        <th style="width: 25%;">
                            <div class="d-flex">
                                <a class="btn btn-primary" style="margin: 0 auto;" href="item.php">Тақырып қосу</a>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($row as $row) {
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td style="text-align:center"><?php echo $row['name']; ?></td>
                            <td class="project-actions d-flex justify-content-around">
                            <a class="btn btn-info btn-sm" href="./edit.php?id=<?php echo $row['id']; ?>">
                                <i class="fas fa-pencil-alt">
                                    Өзгерту
                                </i>
                            </a>
                            <a class="btn btn-danger btn-sm delete-btn" href="./delete.php?id=<?php echo $row['id']; ?>">
                                <i class="fas fa-trash">
                                    Өшіру
                                </i>
                            </a>
                            </td>
                        </tr>
                        <?php
                    };
                ?>
                    
                    <!-- <tr class="d-flex align-items-center justify-content-center" style="position: absolute; right: 0; left: 0;">
                    <td>Нет данных</td>
                    </tr> -->
                </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <footer>
        <a href="../">
            <div class="footer">
                <img src="../img/logo.png" alt="">
                <span>Химия</span>
            </div>
        </a>
    </footer>
    
    <script src="../js/sweetalert2.all.min.js"></script>
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