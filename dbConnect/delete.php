<?php 
    include('dbConnect.php');
    $id = $_GET['id'];
    $SQL = "use 53a";
    mysqli_query($connection,$SQL);
    $SQL="delete from user1 where userid = $id";
    mysqli_query($connection,$SQL);
    header('location:user.php');
?>