<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $users = [
        [
            "login" => "Piet",
            "pass" => "1234"
        ],
        [
            "login" => "Jan",
            "pass" => "567"
        ],
    ];
    $ingelogd = false;

    if(isset($_POST['knop'])) {
        foreach($users as $user) {
            if($_POST['login'] ==  $user["login"] &&  $_POST['password'] == $user["pass"]) {
                $ingelogd = true;
            }
        }


        if($ingelogd) {
            $_SESSION['ingelogd'] = true;
            header('Location: home.php');
        } else {
            echo "Sorry geen toegang voor jou!";
        }
    }

    ?>
    <?php if(!isset($_SESSION["ingelogd"])) { ?>
        <form action="#" method="post">
            Login <input type="text" name="login"><br>
            Password <input type="password" name="password">
            <input type="submit" name="knop" value="Go!">
        </form> 
    <?php } ?> 
</body>
</html>


