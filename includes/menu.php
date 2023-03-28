<?php
if(!isset($_SESSION['ingelogd'])) {
        $ingelogd = "Inloggen";
    } else {
        $ingelogd = "Uitloggen";
    }

?>
<a href="home.php">Home</a> | <a href="about.php">About</a> | <a href="test.php">Test</a> | <a href="uitloggen.php"><?= $ingelogd ?></a><br>
