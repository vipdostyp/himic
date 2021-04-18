<?php
    session_start();
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
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Alert -->
    <link rel="stylesheet" href="../css/sweetalert2.min.css">
    <!-- Summernote -->
    <link rel="stylesheet" href="../css/summernote-bs4.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Футер */
        header, footer {
            min-height: 10vh;
            height: 50px;
            width: 100%;
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
        .card {
            padding: 10px;
        }
        .card-body {
            margin-top: 10px;
        }
        .card-body:last-child {
            width: 100%;
            text-align: right;
        }
    </style>
    <title>Химия</title>
</head>
<body style="background-color: #7dc9e7;">
    <header>
        <div class="header">
            <img src="../img/logo.png" alt="">
            <span>Химия</span>
        </div>
    </header>
    <section>
        <form action="add.php" method="POST" enctype="multipart/form-data">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title font-weight-bold">
                            Тақырып атауы
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="card-header">
                        <h3 class="card-title font-weight-bold">
                            Логотип
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <input name="logo" class="form-control" type="file">
                    </div>
            
                    <div class="card-header">
                        <h3 class="card-title font-weight-bold">
                            Мәтін
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <textarea name="text" id="summernote" style="display: none;"></textarea>
                    </div>
                    <div class="card-body">
                        <input type="submit" name="submit" class="btn btn-primary" value="Сохранить">
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </form>
    </section>
    <footer>
        <div class="footer">
            <img src="../img/logo.png" alt="">
            <span>Химия</span>
        </div>
    </footer>
    
    <script src="../js/sweetalert2.all.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <?php if(isset($_SESSION['message'])) {
        $message = $_SESSION['message'];
        ?>
        <script>
            Swal.fire("<?php echo $message; ?>");
        </script>
        <?php
        unset($_SESSION['message']);
    } ?>
    <script src="../js/summernote-bs4.min.js"></script>
    <script src="../js/summernote-ru-RU.min.js"></script>
    <script src="../js/init.js"></script>
</body>
</html>