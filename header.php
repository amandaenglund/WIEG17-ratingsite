<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php 
    
        $pageName = "Children Songs";

        echo "My Site";        
        if (isset($pageName)) {
            echo " - $pageName";
        }
        ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Många fina låtar 🎶</h1>

<ul>
    <li><a href="start.php">Start</a></li>
    <li><a href="listan.php">Listan</a></li>
    <li><a href="kontakt.php">Kontakt</a></li>
</ul>

<?php



?>