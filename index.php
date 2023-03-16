<?php
    session_start();
    require("php/connect.php");
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    echo $password;

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE email = '$email' AND password = '$password' ");
    if(mysqli_num_rows($check_user) > 0){
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            'id' => $user['id'],
            'email' => $user['email']        
        ];
        header('Location: user.php');
    }else{
        $_SESSION['error'] = "$password";
        header('Location: auth.php');
    }
?>

