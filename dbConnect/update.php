<?php
    include('edit.php');
    include('dbConnect.php');
    $id = $_GET['id'];
    $fName = $_POST['fn'];
    $lName = $_POST['ln'];
    $SQL = "use 53a";
    mysqli_query($connection,$SQL);
    $SQL = "update user1 set firstName = '$fName',lastName = '$lName' where userid = '$id'";
    mysqli_query($connection,$SQL);
    header('location:user.php');
?>