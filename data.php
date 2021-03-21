<?php
require_once "pdo.php";


$name = $_GET['name'];
$data = $_GET['comment_data'];
$sql = "insert into user(name,data) values('$name', '$data')";
$result = mysqli_query($conn,$sql);
    
header("Location: index.php");
?>