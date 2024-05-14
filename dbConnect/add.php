<?php
    include('user.php');
    include('dbConnect.php');
    if(isset($_POST['add'])){
        $fName = $_POST['fn'];
        $lName = $_POST['ln'];
    }
    // echo $fName." ".$lName;
    $SQL = "use 53a";
    mysqli_query($connection,$SQL);
    $SQL = "insert into user1(userid,firstName,lastName) values(null,'$fName','$lName')";
    mysqli_query($connection,$SQL);
    header('location:user.php');
?>