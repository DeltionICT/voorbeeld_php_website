<?php
    session_start();
    if(!isset($_SESSION['ingelogd'])) {
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mijnstyle.css">
    <title>About</title>
</head>
<body>
    <div class="wrapper">
    <?php include("includes/menu.php") ?>