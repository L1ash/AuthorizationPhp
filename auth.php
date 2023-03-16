<?php
    session_start();
    if($_SESSION['user']){
        header("Location: user.php");
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
        <form action="index.php" method="POST">  
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="abc@mail.com">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="" placeholder="">
            </div>
                <button class="btn btn-primary" type="submit">Войти</button>
        </form>
        <?php
            if($_SESSION['error']){
                echo '<p class="msg text-center">'. $_SESSION['error'] .' </p>';
            }
            unset($_SESSION['error']);
        ?>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>