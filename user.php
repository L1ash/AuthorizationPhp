<?php
    session_start();
    if(!$_SESSION['user']){
        header("Location: auth.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Авторизация</title>
</head>
<body>
    <div class="container-xxl" >
        <?php
            if($_SESSION['user']){
                echo '<p class="msg text-center">Ваш id: '. $_SESSION['user']['id'] .' </p>';
                echo '<p class="msg text-center">Ваш email: '. $_SESSION['user']['email'] .' </p>';
            }
            unset($_SESSION['error']);
        ?>
        <a href="php/logout.php">Выход</a>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>