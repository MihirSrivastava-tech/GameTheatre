<?php
   /* $HOST = '127.0.0.1';
    $PORT = 3306;
    $DB_NAME = 'comments';
    $DB_USER = 'root';
    $DB_PASSWORD = '';
    $conn = mysqli_connect($HOST, $DB_USER,$DB_PASSWORD,$DB_NAME,$PORT,); */

    $server = 'localhost';
    $user = 'root';
    $pass ='';
    $db = "comments";
    $port = 3306;
    $conn = mysqli_connect($server,$user,$pass,$db,$port);
